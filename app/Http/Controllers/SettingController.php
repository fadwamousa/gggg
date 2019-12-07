<?php

namespace App\Http\Controllers;

use App\models\Phone;
use App\models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{

    public function index()
    {
        //
        $settings = Setting::all();
        return view('admin.setting.index',compact('settings'));
    }


    public function create($id)
    {
        $setting = Setting::find($id);
        return view('admin.setting.create',compact('setting'));

    }


    public function store(Request $request)
    {
        //
        $setting = Setting::first();
        if($setting != null){

            //update
            $input = $request->all();
            if($request->file('logo')){

                $image = $request->file('logo');
                $name=$image->getClientOriginalExtension();
                $imgName= str_random(10).'tumbnail.'.$name;
                $image->move(public_path().'/images/', $imgName);
            }
            $input['logo'] = $imgName;

            $setting->update($input);
            Session::flash('message','تم اضافة اعدادت جديدة للموقع');


        }else{
            //create
            $input = $request->all();
            if($request->file('logo')){
                $image = $request->file('logo');
                $name=$image->getClientOriginalExtension();
                $imgName= str_random(10).'tumbnail.'.$name;
                $image->move(public_path().'/images/', $imgName);
            }
            $input['logo'] = $imgName;

            $setting::create($imgName);
        }

        Session::flash('message','تم اضافة اعدادت جديدة للموقع');
        return redirect()->route('setting.index');
    }

    public function phone_store(Request $request){

        $setting_id = $request->input('setting_id');
        Phone::create([
            'setting_id'    => $setting_id,
            'phone_number'  => $request->input('phone_number')
        ]);

        return redirect()->route('setting.index');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
