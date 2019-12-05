<?php

namespace App\Http\Controllers;

use App\models\Slider;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    //

    public function index(){
        $sliders = Slider::all();
        return view('admin.sliders.index',compact('sliders'));
    }

    public function create(){
        return view('admin.sliders.create');
    }

    public function store(Request $request){


        //validate
        $this->validate($request , [

            'image'   => 'required',
            'image.*' => 'image|mimes:jpeg,jpg,png,gif|max:10000',
          //  'alt'     => 'required'
        ]);

        //create
        $alt = $request->input('alt');

        if($request->hasfile('image')){
            foreach($request->file('image') as $image)
            {
                $name=$image->getClientOriginalExtension();
                $imgName= str_random(10).'tumbnail.'.$name;
                $image->move(public_path().'/images/', $imgName);

                     Slider::create([

                        'image'  => $imgName,
                        'alt'    => $alt
                    ]);
            }
        }

        return redirect()->route('sliders.index')->with('message','تم ادخال الصور بشكل سليم');



    }

    public function destroy($id){

        $slider  = Slider::findOrFail($id);

        unlink(public_path().'/'.'images/'.$slider->image);
        $slider->delete();
        return redirect()->route('sliders.index')->with('message','تم المسح بشكل ناجح');
    }
}
