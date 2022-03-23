<?php

namespace App\Imports;

use App\Models\reviews;
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



class reviewsImport implements 
    
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
            $reviews = reviews::create([
          'name'=>$row['name'],
          'purchaseditem'=>$row['purchaseditem'],
          'itemcounter'=>$row['itemcounter'],
          'dateofpurchase'=>$row['dateofpurchase'],
          'branchlocation'=>$row['branchlocation'],
          'review'=>$row['review'],
          'ratings'=>$row['ratings'],
          'typeofpurchase'=>$row['typeofpurchase'],
          'resolved'=>$row['resolved'],
          'response'=>$row['response'],
          'isresolved'=>$row['isresolved'],
          'whatsappreview'=>$row['whatsappreview'],
          'company_id'=>$row['company_id'],
           'unlistedcompany'=>$row['unlistedcompany'],
           'show'=>$row['show']
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