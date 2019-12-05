<?php

namespace App\Http\Controllers;

use App\models\Committe;
use App\models\target_commite;
use Illuminate\Http\Request;

class commitesController extends Controller
{
    //
    public function index(){
        $commites        = Committe::all();
        $targets_commite = target_commite::all();
        return view('admin.commites.index',compact('commites','targets_commite'));
    }

    public function create(){
        return view('admin.commites.create');
    }

    public function create_target(){
        $commites = Committe::pluck('name','id')->all();
        return view('admin.commites.target_commite',compact('commites'));
    }

    public function store_target(Request $request){

        $this->validate($request , [

            'target'       => 'required',
            'committes_id' => 'required'
        ]);

        //create
        $target = target_commite::create([
            'target'        => $request->target,
            'committes_id'  => $request->committes_id,
        ]);
        return redirect()->route('committes')->with('message','تم ادخال الهدف الخاص باللجنة بكشل ناجح');
    }

    public function store(Request $request){

        $this->validate($request , [
            'name'       => 'string|min:6',
            'attachment' => 'required|mimes:pdf,doc,docx|max:20000',
            'image'      => 'required',
            'image.*'    => 'image|mimes:jpeg,jpg,png,gif,svg|max:10000',
        ]);

        $image   = $request->file('image');
        $name    = $image->getClientOriginalExtension();
        $imgName = str_random(10).'tumbnail.'.$name;
        $image->move(public_path().'/images/', $imgName);


        $attachment  = $request->file('attachment')->store('public/files');

        $input    = $request->all();
        $input['image'] = $imgName;
        $input['attachment'] = $attachment;
        $commite  = Committe::create($input);
        return redirect()->route('committes')->with('message','تم ادخال اللجان بشكل ناجح');
    }

    public function edit($id){

        $commite = Committe::findOrFail($id);
        return view('admin.commites.edit' , compact('commite'));
    }

    public function edit_target($id){

        $target = target_commite::findOrFail($id);
        $commites = Committe::pluck('name','id')->all();

        return view('admin.commites.target_commite_edit',compact('target','commites'));

    }

    public function update_target(Request $request , $id){
        $target = target_commite::findOrFail($id);

        //update
        $target->update([
            'target'        => $request->target,
            'committes_id'  => $request->committes_id,
        ]);
        return redirect()->route('committes')->with('message','تم تعديل الهدف الخاص باللجنة بكشل ناجح');



    }

    public function update(Request $request , $id){

        $commite = Committe::findOrFail($id);
        $this->validate($request , [
            'name'       => 'string|min:6',
            'attachment' => 'mimes:pdf,doc,docx|max:20000',
            'image'      => 'image',
            'image.*'    => 'mimes:jpeg,jpg,png,gif,svg|max:10000',
        ]);

        $input    = $request->all();

        if($image =$request->file('image')){
            $image   = $request->file('image');
            $name    = $image->getClientOriginalExtension();
            $imgName = str_random(10).'tumbnail.'.$name;
            $image->move(public_path().'/images/', $imgName);

            if($attachment = $request->file('attachment')){
                $attachment  = $request->file('attachment')->store('public/files');
            }

            $input['image'] = $imgName;
            $input['attachment'] = $attachment;
            $commite->update($input);
        }else{
            $commite->update($input);
        }

        return redirect()->route('committes')->with('message','تم تحديث اللجان بشكل ناجح');

    }

    public function delete_target($id){

        $target = target_commite::findOrFail($id);
        $target->delete();
        return redirect()->route('committes')->with('message','تم مسح الهدف ');

    }

    public function destroy($id){
        $commite = Committe::findOrFail($id);
        unlink(public_path().'/images/'.$commite->image);
        $commite->delete();

        return redirect()->route('committes')->with('message','تم مسح اللجنة بشكل ناجح');
    }
}
