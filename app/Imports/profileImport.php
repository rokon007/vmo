<?php

namespace App\Imports;

use App\Models\business_profile;
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



class profileImport implements 
    
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
            $business_profile = business_profile::create([
          'user_id'=>$row['user_id'],
          'email'=>$row['email'],
          'description'=>$row['description'],
          'verified'=>$row['verified'],
          'category'=>$row['category'],
          'tags'=>$row['tags'],
          'status'=>$row['status'],
          'image'=>$row['image']
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
        return 1000;
    }

    public static function afterImport(AfterImport $event)
    {
    }

    public function onFailure(Failure ...$failure)
    {
    }
}