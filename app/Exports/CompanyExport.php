<?php
namespace App\Exports;

use App\Models\Companytb;
use Maatwebsite\Excel\Concerns\FromCollection;

class CompanyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Companytb::all();
    }
}