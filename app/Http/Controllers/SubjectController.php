<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
use DB;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create_Subject()
    {
        return view('admin.pages.file.subject.create');
    }

    public function all_marks_View()
    {
        $marks= Subject::orderBy('roll','asc')->paginate(10);
        return view('admin.pages.marks.index',compact('marks'));
    }
}
