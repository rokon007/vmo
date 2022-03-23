<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Validators\Failure;
use Throwable;



class UsersImport implements 
    
    ToCollection,                           
    WithHeadingRow,
    SkipsOnError,
    WithValidation,
    SkipsOnFailure,
    WithChunkReading,
    ShouldQueue,
    WithEvents
{
     use Importable, SkipsErrors, SkipsFailures, RegistersEventListeners;
   



    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $User = User::create([         
           'id'=>$row['id'],
           'password'=>$row['password'],
           'last_login'=>$row['last_login'],
           'is_superuser'=>$row['is_superuser'],
           'groups'=>bcrypt($row['groups']),
           'user_permissions'=>$row['user_permissions'],
           'username'=>$row['username'],
           'first_name'=>$row['first_name'],
           'last_name'=>$row['last_name'],
           'email'=>$row['email'],
           'is_staff'=>$row['is_staff'],
           'is_active'=>$row['is_active'],
           'date_joined'=>$row['date_joined'],
           'company_name'=>$row['company_name'],
           'country'=>$row['country'],
           'city'=>$row['city'],
           'block'=>$row['block'],
           'contact'=>$row['contact'],
           'level'=>$row['level']
            ]);

            
        }
    }

    public function rules(): array
    {
        return [
            // '*.email' => ['email', 'unique:users,email']
        ];
    }


    public function chunkSize(): int
    {
        return 5000;
    }

    public static function afterImport(AfterImport $event)
    {
    }

    public function onFailure(Failure ...$failure)
    {
    }
}