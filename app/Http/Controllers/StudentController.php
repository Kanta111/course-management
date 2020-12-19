<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function index(){
    	return view('welcome');
    } 
    public function create(){
    	return view('create');
    }  
    public function list(){
        $students=Student::all();
        return view('list',compact('students'));
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'name'=>'required',
    		'reg'=>'required',
    		'dept'=>'required',
    		'email'=>'required',
    		'course'=>'required',
    		'date'=>'required',

    	]);
    	$student=new Student;
    	$student->name=$request->name;
    	$student->r_id=$request->reg;
    	$student->dept=$request->dept;
    	$student->email=$request->email;
    	$student->course=$request->course;
    	$student->date=$request->date;
    	$student->save();
    	return redirect (route('list'))->with('successMsg','Student Successfully Added');


    }
    public function edit($id){
        $student=Student :: find ($id);
        return view ('edit',compact ('student'));
    }
    public function update(Request $request,$id){
        $this->validate($request,[
            'name'=>'required',
            'reg'=>'required',
            'dept'=>'required',
            'email'=>'required',
            'course'=>'required',
            'date'=>'required',

        ]);
        $student=Student::find($id);
        $student->name=$request->name;
        $student->r_id=$request->reg;
        $student->dept=$request->dept;
        $student->email=$request->email;
        $student->course=$request->course;
        $student->date=$request->date;
        $student->save();
        return redirect (route('list'))->with('successMsg','Student Successfully Added');

    }
    public function delete($id){
        return redirect(route('home'))->with('successMsg','Student Successfully Deleted');
    }
    public function contact(){
        return view('contact');
    }  



}
