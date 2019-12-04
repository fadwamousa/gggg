<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Session;

class AdminUsersController extends Controller
{
    //

    public function index(){
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    public function create(){
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.create',compact('roles'));
    }

    public function store(Request $request){


        $this->validate($request , [

            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|confirmed',
            'role_id'   => 'required'
        ]);

        //create
        $user = User::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'password'   => bcrypt($request->password),
            'role_id'    => $request->role_id,
            'is_active'  => $request->is_active,
        ]);
       return redirect()->route('admin.users');

    }

    public function edit($id){

        $user  = User::findOrFail($id);
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.edit',compact('user','roles'));
    }

    public function update(Request $request , $id){

        $user = User::findOrFail($id);
        $rules = [
            'name'     => 'string',
            'email'    => 'email|unique:users,email,'.$user->id
        ];
        $this->validate($request ,$rules );

        $input = $request->all();

        if($request->has('password') && $user->password != $request->password){
            $input['password'] = bcrypt($request->password);
        }
        $user->update($input);


        return redirect()->route('admin.users')->with('message','تم التعديل بشكل ناجح');

    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users')->with('message','تم المسح بشكل ناجح');
    }

    public function logout(){
        auth()->logout();
        Session::flash('message','You have been Logged Out ');
        return redirect()->route('form_login');
    }
}
