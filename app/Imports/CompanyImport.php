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
           'id'=>$row[0],
           'company'=>$row[1],
           'country'=>$row[2],
           'city'=>$row[3],
           'block'=>$row[4],
           'contact'=>$row[5],
           'category'=>$row[6],
           'subcategory'=>$row[7]

        ]);
    }
}