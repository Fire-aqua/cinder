<?php

namespace App\Exports;

use App\Models\Cat;
use Maatwebsite\Excel\Concerns\FromCollection;

class CatsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cat::all();
    }
}
