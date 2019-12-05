<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use Session;
use App\Http\Controllers\Controller;

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
        return redirect()->route('users.index');

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


        return redirect()->route('users.index')->with('message','تم التعديل بشكل ناجح');

    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('message','تم المسح بشكل ناجح');
    }

    public function logout(){
        auth()->logout();
        Session::flash('message','You have been Logged Out ');
        return redirect()->route('form_login');
    }
}
