<?php

namespace App\Http\Controllers;

use App\models\Center;
use App\models\Message;
use App\models\PhoneCenter;
use App\models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CenterController extends Controller
{

    public function index()
    {
        //
        $centers  = Center::all();
        $messages = Message::all();
        $works    = Work::all();
        return view('admin.centers.index',compact('centers','messages','works'));
    }

    public function create($id)
    {
        //
        $center = Center::findOrFail($id);
        return view('admin.centers.create',compact('center'));
    }


    public function store(Request $request)
    {
        //
        $center= Center::first();
        if($center != null){

            //update
            $input = $request->all();
            if($request->file('image')){

                $image = $request->file('image');
                $name=$image->getClientOriginalExtension();
                $imgName= str_random(10).'tumbnail.'.$name;
                $image->move(public_path().'/images/', $imgName);
            }
            $input['image'] = $imgName;

            $center->update($input);

        }else{
            //create
            $input = $request->all();
            if($request->file('image')){
                $image = $request->file('image');
                $image = $request->file('image');
                $name=$image->getClientOriginalExtension();
                $imgName= str_random(10).'tumbnail.'.$name;
                $image->move(public_path().'/images/', $imgName);
            }
            $input['image'] = $imgName;

            $center::create($imgName);
        }

        Session::flash('message','تم انشاء معلومات عن المركز جديدة');
        return redirect()->route('centers.index');
    }

    public function phone_store(Request $request){

           $center_id = $request->input('center_id');
           PhoneCenter::create([
               'center_id' => $center_id,
               'phone'     => $request->input('phone')
           ]);

       return redirect()->route('centers.index');

    }

    public function create_messages(){

        $center = Center::pluck('name','id')->all();
        return view('admin.centers.create_message',compact('center'));
    }

    public function store_messages(Request $request){

         $this->validate($request, ['heading' => 'required' , 'body' => 'required']);

         $message = Message::create($request->all());
         return redirect()->route('centers.index')->with('message','  تم انشاء رسالة جديدة');

    }

    public function messages_update(Request $request , $id){

        $message = Message::findOrFail($id);
        $message->update($request->all());

        return redirect()->route('centers.index')->with('message','تم تعديل علي الرسالة');

    }

    public function messages_edit($id){

        $message = Message::findOrFail($id);
        $center = Center::pluck('name','id')->all();

        return view('admin.centers.edit_message',compact('message','center'));

    }

    public function messages_destroy($id){

        $message = Message::findOrFail($id);
        $message->delete();

        return redirect()->route('centers.index')->with('message','تم المسح بنجاح');

    }

    public function create_works(){
        $center = Center::pluck('name','id')->all();
        return view('admin.centers.create_works',compact('center'));
    }

    public function store_works(Request $request){

        $this->validate($request, ['projects' => 'required']);

        $work = Work::create($request->all());
        return redirect()->route('centers.index')->with('message','  تم انشاء العمل التطوعي ');


    }

    public function edit_works($id){

        $work = Work::findOrFail($id);
        $center = Center::pluck('name','id')->all();

        return view('admin.centers.edit_work',compact('work','center'));

    }

    public function update_works(Request $request , $id){

        $work = Work::findOrFail($id);
        $work->update($request->all());

        return redirect()->route('centers.index')->with('message','تم تعديل علي الاعمال التطوعية');
    }

    public function delete_works($id){

        $work = Work::findOrFail($id);
        $work->delete();
        return redirect()->route('centers.index')->with('messages','تم مسح العمل بنجاح');

    }




}
