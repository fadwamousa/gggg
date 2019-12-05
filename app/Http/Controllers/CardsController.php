<?php

namespace App\Http\Controllers;

use App\models\Card;
use App\models\MembershipCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardsController extends Controller
{
    //

    public function index(){
        $cards   = Card::all();
        $member  = MembershipCard::all();
        return view('admin.cards.index',compact('cards','member'));
    }

    public function create(){
        return view('admin.cards.create');
    }

    public function store(Request $request){


        //validate
        $this->validate($request , [

            'image'   => 'required',
            'image.*' => 'image|mimes:jpeg,jpg,png,gif|max:10000',

        ]);



        if($request->hasfile('image')){
            foreach($request->file('image') as $image)
            {
                $name=$image->getClientOriginalExtension();
                $imgName= str_random(10).'tumbnail.'.$name;
                $image->move(public_path().'/images/', $imgName);

                Card::create([

                    'image'  => $imgName,

                ]);


            }
        }

        return redirect()->route('cards')->with('message','تم ادخال البطاقات بشكل سليم');

    }

    public function store_mem_card(Request $request){

        $this->validate($request , [
            'name'       => 'string|min:6',
            'attachment' => 'required|mimes:pdf,doc,docx|max:20000',
        ]);

        $attachment  = $request->file('attachment')->store('public/files');
        $input    = $request->all();
        $input['attachment'] = $attachment;
        $member  = MembershipCard::create($input);
        return redirect()->route('cards')->with('message','تم ادخال الاستمارات بشكل ناجح');

    }

    public function destroy_mem_card($id){

        $member = MembershipCard::find($id);
        Storage::delete($member->attachment);
        $member->delete();
        return redirect()->route('cards');

    }
    public function destroy($id){

        $card  = Card::findOrFail($id);

        unlink(public_path().'/'.'images/'.$card->image);
        $card->delete();
        return redirect()->route('cards')->with('message','تم المسح بشكل ناجح');
    }

    public function edit_mem_card($id){
        $member = MembershipCard::find($id);
        return view('admin.cards.edit_mem',compact('member'));
    }

    public function update_mem_card(Request $request ,$id){

        $member = MembershipCard::find($id);
        $this->validate($request , [
            'name'       => 'string|min:6',
            'attachment' => 'mimes:pdf,doc,docx|max:20000',
        ]);

        $input    = $request->all();

        if($attachment =$request->file('attachment')){
            $attachment  = $request->file('attachment')->store('public/files');
            $input['attachment'] = $attachment;
            $member->update($input);
        }else{
            $member->update($input);
        }

        return redirect()->route('cards')->with('message','تم تحديث اللجان بشكل ناجح');
    }


    public function create_mem_card(){
        return view('admin.cards.create_mem');
    }
}
