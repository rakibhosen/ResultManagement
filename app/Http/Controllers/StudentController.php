<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use DB;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create_student()
    {
        return view('admin.pages.file.student.create');
    }

    public function all_student_View()

    {
        $students= Student::orderBy('name','asc')->paginate(10);
        return view('admin.pages.student.index',compact('students'));

    }

    public function store_student(Request $request)
    {
   
        $this->validate($request,[
            'name' => 'required',
            'roll' => 'required',
            'reg' => 'required',
            'section' => 'required',
            'class' => 'required',
            'gpa' => 'required',
            'result' => 'required',
        ]);
        
        $student = new Student();
        $student->name    = $request->name;
        $student->roll    = $request->roll;
        $student->reg     = $request->reg;
        $student->section = $request->section;
        $student->class   = $request->class;
        $student->result  = $request->result;
        $student->gpa     = $request->gpa;
        $student->save();

        return back();
     

    }

    public function update_student(Request $request, $id)
    {
   
        $this->validate($request,[
            'name' => 'required',
            'roll' => 'required',
            'reg' => 'required',
            'section' => 'required',
            'class' => 'required',
            'gpa' => 'required',
            'result' => 'required',
        ]);
        
        $student =Student::find($id);
        $student->name    = $request->name;
        $student->roll    = $request->roll;
        $student->reg     = $request->reg;
        $student->section = $request->section;
        $student->class   = $request->class;
        $student->result  = $request->result;
        $student->gpa     = $request->gpa;
        $student->save();

        return back();
     

    }

    public function delete_student($id)
    {
        $student = Student::find($id);
        $student->delete();
        return back();
    }

}
