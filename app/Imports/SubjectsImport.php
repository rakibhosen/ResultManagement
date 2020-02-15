<?php

namespace App\Imports;

use App\Subject;
use Maatwebsite\Excel\Concerns\ToModel;

class SubjectsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Subject([
            'roll'             => $row[0],
            'subject_name'     => $row[1], 
            'subject_code'     => $row[2],
            'marks'            => $row[3],
            'grade'            => $row[4],
        ]);
    }
}
