<?php

namespace App\Imports;
use App\Models\Companytb;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithValidation;
class CompanyImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Companytb([
           'id'=>$row[7],
           'company'=>$row[3],
           'country'=>$row[5],
           'city'=>$row[2],
           'block'=>$row[0],
           'contact'=>$row[4],
           'category'=>$row[1],
           'subcategory'=>$row[8]

        ]);
    }
}