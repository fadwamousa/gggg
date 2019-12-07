<?php

namespace App\Http\Controllers;

use App\models\Wakf;
use Illuminate\Http\Request;

class WakfController extends Controller
{

    public function index()
    {

    }



    public function create()
    {
        //

       return view('admin.charities.wakf_create');

    }


    public function store(Request $request)
    {
        //

        $this->validate($request , [

            'image'    => 'required',
            'image.*'  => 'image|mimes:jpeg,jpg,png,gif|max:10000',
            'body'     => 'required',
            'heading'  => 'required'
        ]);

        $image   = $request->file('image');
        $name    = $image->getClientOriginalExtension();
        $imgName = str_random(10).'tumbnail.'.$name;
        $image->move(public_path().'/images/', $imgName);

        Wakf::create([
            'heading' => $request->get('heading'),
            'body'    => $request->get('body'),
            'image'   => $imgName
        ]);

        return redirect()->route('charities');


    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
        $wakf = Wakf::find($id);
        return view('admin.charities.wakf_edit',compact('wakf'));
    }


    public function update(Request $request, $id)
    {
        //
        $this->validate($request , [
            'image'  => 'image|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $wakf = Wakf::find($id);


        if($request->file('image')){
            $image   = $request->file('image');
            $name    = $image->getClientOriginalExtension();
            $imgName = str_random(10).'tumbnail.'.$name;
            $image->move(public_path().'/images/', $imgName);

            $wakf->update([
                'image'   => $imgName,
                'body'    => $request->input('body'),
                'heading' => $request->input('heading')
            ]);

        }else{

            $wakf->update([

                'body'    => $request->input('body'),
                'heading' => $request->input('heading')
            ]);
        }

        return redirect()->route('charities')->with('message','تم التعديل علي انواع الوقف بنجاح');



    }


    public function destroy($id)
    {
        //
        $wakf = Wakf::find($id);
        unlink(public_path().'/images/'.$wakf->image);
        $wakf->delete();
        return redirect()->route('charities')->with('message','تم المسح بنجاح');

    }
}
