<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use App\Exports\SubjectsExport;
use App\Imports\SubjectsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Student;
use App\Subject;
use DB;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin.pages.student.index');
    }




    // ====marks importExport

    public function marks_export() 
    {
        return Excel::download(new SubjectsExport, 'marks.xlsx');
    }

   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function  marks_import() 
    {
        Excel::import(new SubjectsImport,request()->file('file'));
           
        return back();
    }


    // =======student exportImport
    public function student_export() 
    {
        return Excel::download(new StudentsExport, 'Students.xlsx');
    }

   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function  student_import() 
    {
        Excel::import(new StudentsImport,request()->file('file'));
           
        return back();
    }
}
