<?php

namespace App\Http\Controllers;

use App\models\Contact;
use Illuminate\Http\Request;
use App\Mail\SendMail;
class ContactController extends Controller
{
    //
    public function mail(Request $request){

        $data = array(
            'name'     => $request->get('name'),
            'email'    => $request->get('email'),
            'phone'  => $request->get('phone'),
            'message'  => $request->get('message'));

        \Mail::to('xxxxxxxxx@gmail.com')->send(new SendMail($data['name'],$data['email'],$data['phone'],$data['message']));
        Contact::create($request->all());
        return dd("Thanks for mail us");

    }

    public function index(){
        $contacts = Contact::all();
        return view('admin.contacts.index' , compact('contacts'));
    }

    public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
        return dd("thanks for deleteing");
    }


}

