<?php

namespace App\Http\Controllers;

use App\models\Event;
use App\models\PhotoEvents;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //
    public function index(){
        $events = Event::all();
        $photos = PhotoEvents::all();
        return view('admin.events.index',compact('events','photos'));
    }

    public function create(){
        return view('admin.events.create');
    }

    public function store(Request $request){

        $this->validate($request , [
            'event_name' => 'required'
        ]);

        $event = Event::create([
            'event_name' => $request->event_name
        ]);

        return redirect()->route('events')->with('message','تم ادخال حدث جديد');
    }

    public function edit($id){
        $event = Event::find($id);
        return view('admin.events.edit',compact('event'));
    }

    public function update(Request $request , $id){
        $event = Event::findOrFail($id);
        $event->update($request->all());
        return redirect()->route('events')->with('message','تم تعديل علي الحدث بشكل ناجح');
    }

    public function destroy($id){
        $event = Event::findOrFail($id)->delete();
        return redirect()->route('events')->with('message','تم المسح بشكل ناجح');
    }

    public function create_photo_event(){
        $events = Event::pluck('event_name','id')->all();
        return view('admin.events.create_photo')->with('events',$events);
    }

    public function store_photo_event(Request $request){

        $event_id = $request->input('event_id');
        if($request->hasfile('path')){
            foreach($request->file('path') as $image)
            {
                $name=$image->getClientOriginalExtension();
                $imgName= str_random(10).'tumbnail.'.$name;
                $image->move(public_path().'/images/', $imgName);

                PhotoEvents::create([

                    'path'     => $imgName,
                    'event_id' => $event_id
                ]);


            }
        }

        return redirect()->route('events')->with('message','تم ادخال الصور');

    }
}
