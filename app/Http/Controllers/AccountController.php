<?php

namespace App\Http\Controllers;

use App\models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function index(){
        $accounts  = Account::all();
        return view('admin.accounts.index',compact('accounts'));
    }

    public function create(){
        return view('admin.accounts.create');
    }

    public function edit($id){
        $account = Account::findOrFail($id);
        return view('admin.accounts.edit',compact('account'));

    }


    public function store(Request $request){

        $this->validate($request , [
            'bank_name'      => 'string|min:6',
            'account_name'   => 'required|string',
            'account_number' => 'required',
            'IBAN_number'    => 'required',
            'image'          => 'required',
            'image.*'        => 'image|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        $image   = $request->file('image');
        $name    = $image->getClientOriginalExtension();
        $imgName = str_random(10).'tumbnail'.$name;
        $image->move(public_path().'/images/', $imgName);

        $input    = $request->all();
        $input['image'] = $imgName;
        $account  = Account::create($input);
         return redirect()->route('accounts.index')->with('message','تم ادخال الحساب البنكي بشكل ناجح');


    }

    public function update(Request $request , $id){
        $account = Account::findOrFail($id);
        $input    = $request->all();

        if($request->file('image')){

            $image   = $request->file('image');
            $name    = $image->getClientOriginalExtension();
            $imgName = str_random(10).'tumbnail'.$name;
            $image->move(public_path().'/images/', $imgName);

            $input['image'] = $imgName;
            $account->update($input);
        }else{
            $account->update($input);
        }

        return redirect()->route('accounts.index')->with('message','تم تحديث الحساب البنكي بشكل ناجح');


    }

    public function destroy($id){
        $account = Account::findOrFail($id);
        unlink(public_path().'/images/'.$account->image);
        $account->delete();

        return redirect()->route('accounts.index')->with('message','م المسح بشكل ناجح');

    }
}
