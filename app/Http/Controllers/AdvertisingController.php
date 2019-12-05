<?php

namespace App\Http\Controllers;

use App\models\Advertsing;
use Illuminate\Http\Request;

class AdvertisingController extends Controller
{
    //

    public function index(){
        $advs = Advertsing::all();
        return view('admin.Advertsings.index',compact('advs'));
    }

    public function create(){
        return view('admin.Advertsings.create');
    }

    public function store(Request $request){


        //validate
        $this->validate($request , [

            'image'   => 'required',
            'image.*' => 'image|mimes:jpeg,jpg,png,gif|max:10000',

        ]);

        //create
        $alt = $request->input('alt');

        if($request->hasfile('image')){
            foreach($request->file('image') as $image)
            {
                $name=$image->getClientOriginalExtension();
                $imgName= str_random(10).'tumbnail.'.$name;
                $image->move(public_path().'/advs/', $imgName);

                Advertsing::create([

                    'image'  => $imgName,
                    'alt'    => $alt
                ]);


            }
        }

        return redirect()->route('advs.index')->with('message','تم ادخال الاعلان بشكل سليم');



    }

    public function destroy($id){

        $adv  = Advertsing::findOrFail($id);

        unlink(public_path().'/'.'advs/'.$adv->image);
        $adv->delete();
        return redirect()->route('advs.index')->with('message','تم المسح بشكل ناجح');
    }
}
