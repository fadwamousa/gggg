<?php

namespace App\Http\Controllers;

use App\models\Wakf;
use Illuminate\Http\Request;
use App\models\Charity;
use App\models\Details_chairty;
use App\models\Target;
use Session;
class charitiesController extends Controller
{
    //
    public function index(){

        $charities = Charity::all();
        $details   = Details_chairty::all();
        $wakf = Wakf::all();
        $targets = Target::all();
        return view('admin.charities.index',compact('charities','details','targets','wakf'));

    }

    public function create($id)
    {

        $charity = Charity::findOrFail($id);
        return view('admin.charities.create',compact('charity'));
    }
    public function store(Request $request)
    {

        $charity=Charity::first();
        if($charity != null){

            //update

            $charity->update($request->all());

        }else{
            //create
            Charity::create($request->all());
        }

        Session::flash('message','تم انشاء معلومات عن الجمعية جديدة');
        return redirect()->route('charities');


    }

    public function create_detail(){
        return view('admin.charities.add');
    }

    public function edit($id){
        $detail = Details_chairty::findOrFail($id);
        return view('admin.charities.edit',compact('detail'));
    }

    public function update(Request $request , $id){

        $detail = Details_chairty::findOrFail($id);
        $detail->update($request->all());
        return redirect()->route('charities');

    }

    public function destroy($id){
        $detail = Details_chairty::findOrFail($id)->delete();
        return redirect()->route('charities');
    }

    public function details(Request $request){

        $detail = Details_chairty::create($request->all());
        return redirect()->route('charities');


    }

    public function target_create(){
        return view('admin.charities.target_create');
    }

    public function target_store(Request $request){

        $this->validate($request , [

            'image'    => 'required',
            'image.*'  => 'image|mimes:jpeg,jpg,png,gif|max:10000',
            'body'     => 'required'
        ]);

        if($request->file('image')){
            $image   = $request->file('image');
            $name    = $image->getClientOriginalExtension();
            $imgName = str_random(10).'tumbnail.'.$name;
            $image->move(public_path().'/images/', $imgName);

            $target = Target::create([
                'image' => $imgName,
                'body'  => $request->input('body')
            ]);

        }else{
            return redirect()->back()->with('message','يجب عليك ادخال صورة');
        }
        return redirect()->route('charities')->with('message' ,' تم ادخال الهدف بشكل ناجح');

    }

    public function target_edit($id){

        $target = Target::findOrFail($id);
        return view('admin.charities.target_edit',compact('target'));

    }

    public function target_update(Request $request , $id){

        $target = Target::findOrFail($id);

        if($request->file('image')){

            $image   = $request->file('image');
            $name    = $image->getClientOriginalExtension();
            $imgName = str_random(10).'tumbnail.'.$name;
            $image->move(public_path().'/images/', $imgName);

            $target->update([
                'image' => $imgName,
                'body'  => $request->input('body')
            ]);

        }else{
            $target->update([
                'body'  => $request->input('body')
            ]);
        }
        return redirect()->route('charities')->with('message' ,' تم تحديث الهدف بشكل ناجح');



    }

    public function target_destroy($id){

        $target = Target::findOrFail($id);
        unlink(public_path().'/images/'.$target->image);
        $target->delete();

        return redirect()->route('charities')->with('message' ,' تم مسح الهدف بشكل ناجح');


    }





}
