<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'name'     => $row[0],
            'roll'     => $row[1], 
            'reg'      => $row[2], 
            'class'    =>$row[3],
            'section'  => $row[4],
            'result'   => $row[5], 
            'gpa'      => $row[6], 
          
        ]);
    }
}
