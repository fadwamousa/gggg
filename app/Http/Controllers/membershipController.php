<?php

namespace App\Http\Controllers;

use App\models\Membership;
use Illuminate\Http\Request;
use Hijrian;
class membershipController extends Controller
{
    //

    public function index(){
        $membership = Membership::all();
        return view('admin.membership.index',compact('membership'));
    }

    public function create(){
        return view('admin.membership.create');
    }

    public function store(Request $request){

        $this->validate($request , [
            'name'       => 'required',
            'career_name'=> 'required',
            'date_hiring'=> 'required|date'
        ]);

        $membership = Membership::create($request->all());

        return redirect()->route('membership.index')->with('message','تم ادخال العضو بشكل ناجح');


    }

    public function edit($id){
        $membership = Membership::findOrFail($id);
        return view('admin.membership.edit',compact('membership'));
    }

    public function update(Request $request , $id){

        $membership = Membership::findOrFail($id);
        $membership->update($request->all());

        return redirect()->route('membership.index')->with('message','تم ادخال العضو بشكل ناجح');

    }

    public function destroy($id){
        $membership = Membership::findOrFail($id)->delete();
        return redirect()->route('membership.index')->with('message' , 'تم مسح العضو بشكل ناجح');

    }
}
