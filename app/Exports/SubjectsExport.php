<?php

namespace App\Exports;

use App\Subject;
use Maatwebsite\Excel\Concerns\FromCollection;

class SubjectsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Subject::all();
    }
}
