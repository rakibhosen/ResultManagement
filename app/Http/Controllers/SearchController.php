<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Student;
use App\Section;
use App\Classes;
use DB;
  

class SearchController extends Controller
{
    public function search()
    {
        return view('search');
    }

    public function searchView(Request $request)
    {

        if(empty($request->roll && $request->reg && $request->section && $request->class))
        {
       return back();

        }else{
            $roll = $request->roll;
            $reg= $request->reg;
            $section = $request->section;
            $class=$request->class;
      
           $studentt = DB::table('students')
                      ->where('roll','like','%'.$roll.'%')
                      ->where('reg','like','%'.$reg.'%')
                      ->where('class','like','%'.$class.'%')
                      ->where('section','like','%'.$section.'%')
                      ->first();
      
           $students = DB::table('students')
                      ->Join('subjects', 'students.roll', '=', 'subjects.roll')
                      ->where('students.roll','like','%'.$roll.'%')
                      ->where('students.reg','like','%'.$reg.'%')
                      ->where('students.section','like','%'.$section.'%')
                      ->get();
                      if(empty( $studentt && $students)){
                        return view('error');
                      }else{
                        return view('searchView',compact('students','studentt'));
                      }
  
        }

   }
}
