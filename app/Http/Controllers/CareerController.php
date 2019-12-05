<?php

namespace App\Http\Controllers;

use App\models\Career;
use App\models\Employee;
use Illuminate\Http\Request;

class CareerController extends Controller
{


    public function index(){
        $cars      = Career::all();
        $employee  = Employee::all();
        return view('admin.careers.index',compact('cars','employee'));
    }

    public function create(){
        return view('admin.careers.create');
    }

    public function create_employee(){
        $careers = Career::pluck('career_name','id')->all();
        return view('admin.careers.employee_create',compact('careers'));
    }

    public function edit_employee($id){

        $employee = Employee::findOrFail($id);
        $careers = Career::pluck('career_name','id')->all();

        return view('admin.careers.employee_edit',compact('employee','careers'));

    }

    public function update_employee(Request $request , $id){
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('career.show');


    }

    public function store_employee(Request $request){
        $employee = Employee::create($request->all());
        return redirect()->route('career.show')->with('message','تم اضافة الوظيفة بشكل ناجح');

    }

    public function store(Request $request){

        $career = Career::create($request->all());
        return redirect()->route('career.show')->with('message','تم اضافة الوظيفة بشكل ناجح');

    }

    public function edit($id){
        $career = Career::find($id);
        return view('admin.careers.edit',compact('career'));
    }

    public function update(Request $request , $id){
        $career = Career::find($id);
        $career->update($request->all());
        return redirect()->route('career.show')->with('message','تم التعديل علي الوظيفة بشكل ناجح');
    }

    public function destroy_employee($id){
        $employee = Employee::findOrFail($id)->delete();

        return redirect()->route('career.show')->with('message','تم مسح الموظفة من النظام');

    }

    public function destroy($id){
        $career = Career::find($id);
        $career->delete();
        return redirect()->route('career.show')->with('message','تم الحذف بشكل ناجح');

    }
}
