<?php

namespace App\Imports;

use App\Models\Good;
use Maatwebsite\Excel\Concerns\ToModel;

class GoodsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if(!empty($row[0])) {
            return new Good([
                'name' => $row[0],
                'size' => $row[1],
                'presence' => $row[2],
                'sells_since' => $row[3],               
            ]);
        }
    }
}