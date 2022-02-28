<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

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
           'name'=>$row[1],
           'email'=>$row[2],
           'email_verified_at'=>$row[3],
           'password'=>bcrypt($row[4]),
           'is_admin'=>$row[5],
           'company_name'=>$row[6],
           'companycontact'=>$row[7],
           'address'=>$row[8],
           'remember_token'=>$row[9],
           'created_at'=>$row[10],
           'updated_at'=>$row[11]

        ]);
    }
}
