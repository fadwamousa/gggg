<?php

namespace App\Http\Controllers;

use App\models\Kindergarten;
use App\models\PhotoKindergarten;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;

class kindergartenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kindergarten = Kindergarten::all();
        $photos      = PhotoKindergarten::all();
        return view('admin.kindergarten.index',compact('kindergarten','photos'));
    }


    public function create()
    {
        //
        return view('admin.kindergarten.create');
    }


    public function store(Request $request)
    {
        //
        $this->validate($request , [

            'name' => 'required|string|unique:kindergartens'

        ]);

        //create
        Kindergarten::create($request->all());

        return redirect()->route('kindergarten.index')->with('message','تم ادخال اسم الروضة بنجاح');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $kind = Kindergarten::findOrFail($id);
        return view('admin.kindergarten.edit',compact('kind'));
    }

    public function update(Request $request, $id)
    {
        //
        $kind = Kindergarten::findOrFail($id);
        if($request->get('name')){
            $kind->name = $request->get('name');
        }
        $kind->update($request->all());
        return redirect()->route('kindergarten.index')->with('message','تم التعديل علي اسم الروضة بنجاح');
    }


    public function destroy(Kindergarten $kindergarten)
    {
        //
        $kindergarten->delete();
        return redirect()->route('kindergarten.index')->with('message','تم المسح بنجاح');


    }


    public function add($id){
        $kind = Kindergarten::find($id);
        return view('admin.kindergarten.add',compact('kind'));
    }

    public function store_photo(Request $request){

        $this->validate($request , [
            'image'   => 'required',
            'image.*' => 'image|mimes:jpg,png,gif,svg|max:20000'
        ]);

        if($request->hasFile('image')){
            foreach($request->file('image') as $image){
                $name = $image->getClientOriginalExtension();
                $imgName = str_random(10).'thumpanil.'.$name;
                $image->move(public_path().'/images/', $imgName);


                PhotoKindergarten::create([
                    'kindergarten_id' => $request->get('kindergarten_id'),
                    'image' => $imgName
                ]);
            }
        }

        return redirect()->route('kindergarten.index')->with('message','تم دخول الصور الخاصة بالروضة المحددة');


    }

    public function delete_photo($id){

        $photoKindergarten = PhotoKindergarten::find($id);
        unlink(public_path().'/images/'.$photoKindergarten->image);
        $photoKindergarten->delete();

        return redirect()->route('kindergarten.index');
    }
}
