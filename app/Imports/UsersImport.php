<?php

namespace App\Imports;

use App\Models\User;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
     public function model(array $row)
    {
        return new User([
           'id'=>$row[0],
           'password'=>$row[1],
           'last_login'=>$row[2],
           'is_superuser'=>$row[3],
           'groups'=>bcrypt($row[4]),
           'user_permissions'=>$row[5],
           'username'=>$row[6],
           'first_name'=>$row[7],
           'last_name'=>$row[8],
           'email'=>$row[9],
           'is_staff'=>$row[10],
           'is_active'=>$row[11],
           'date_joined'=>$row[12],
           'company_name'=>$row[13],
           'country'=>$row[14],
           'city'=>$row[15],
           'block'=>$row[16],
           'contact'=>$row[17],
           'level'=>$row[18]

        ]);
    }
}
