<?php

namespace App\Http\Controllers;

use App\models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //

    public function index(){
        $reports = Report::all();
        return view('admin.reports.index',compact('reports'));
    }

    public function create(){
        return view('admin.reports.create');
    }

    public function store(Request $request){
        $this->validate($request , [
            'name'       => 'required|string',
            'attachment' => 'required|mimes:pdf,doc,docx|max:20000',
        ]);

        $attachment  = $request->file('attachment')->store('public/files');

        $input    = $request->all();
        $input['attachment'] = $attachment;
        $reports  = Report::create($input);
        return redirect()->route('reports.index')->with('message','تم ادخال التقارير بشكل ناجح');
    }

    public function edit($id){

        $report = Report::findOrFail($id);
        return view('admin.reports.edit',compact('report'));

    }

     public function update(Request $request , $id){

            $report = Report::findOrFail($id);
            $this->validate($request , [
                'name'       => 'string|min:6',
                'attachment' => 'mimes:pdf,doc,docx|max:20000',
            ]);

            $input    = $request->all();
            if($request->file('attachment')){
                if($attachment = $request->file('attachment')){
                    $attachment  = $request->file('attachment')->store('public/files');

                    $input['attachment'] = $attachment;
                    $report->update($input);
                }
            }
            else{
                $report->update($input);
            }

            return redirect()->route('reports.index')->with('message','تم تحديث الصور بشكل ناجح');

        }

    public function destroy($id){
      $report = Report::findOrFail($id);
      $report->delete();
      return redirect()->route('reports.index')->with('message','تم المسح بشكل ناجح');
    }
}
