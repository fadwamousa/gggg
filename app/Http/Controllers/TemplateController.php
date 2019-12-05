<?php

namespace App\Http\Controllers;

use App\models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    //
    public function index(){
        $templates = Template::all();
        return view('admin.templates.index',compact('templates'));
    }

    public function create(){
        return view('admin.templates.create');
    }

    public function store(Request $request){
        $this->validate($request , [
            'name_template'  => 'required|string',
            'attachment'     => 'required|mimes:pdf,doc,docx|max:20000',
        ]);

        $attachment  = $request->file('attachment')->store('public/files');

        $input    = $request->all();
        $input['attachment'] = $attachment;
        Template::create($input);
        return redirect()->route('templates.index')->with('message','تم ادخال التقارير بشكل ناجح');
    }

    public function edit($id){

        $template = Template::findOrFail($id);
        return view('admin.templates.edit',compact('template'));

    }

    public function update(Request $request , $id){

        $template = Template::findOrFail($id);
        $this->validate($request , [
            'name_template'=> 'string|min:6',
            'attachment' => 'mimes:pdf,doc,docx|max:20000',
        ]);

        $input    = $request->all();
        if($request->file('attachment')){
            if($attachment = $request->file('attachment')){
                $attachment  = $request->file('attachment')->store('public/files');

                $input['attachment'] = $attachment;
                $template->update($input);
            }
        }
        else{
            $template->update($input);
        }

        return redirect()->route('templates.index')->with('message','تم تحديث الصور بشكل ناجح');

    }

    public function destroy($id){
        $template = Template::findOrFail($id);
        $template->delete();
        return redirect()->route('templates.index')->with('message','تم المسح بشكل ناجح');
    }
}
