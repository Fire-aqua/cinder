<?php

namespace App\Imports;

use App\Models\Mountain;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MountainsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {       
        Mountain::create([
        'name' => $row['name'],
        'height' => $row['height'],
        'is_icy' => $row['is_icy'],              
        ]);        
    }
}
