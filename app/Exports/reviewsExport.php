<?php
namespace App\Exports;

use App\Models\reviews;
use Maatwebsite\Excel\Concerns\FromCollection;

class reviewsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return reviews::all();
    }
}