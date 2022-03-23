<?php
namespace App\Exports;

use App\Models\business_profile;
use Maatwebsite\Excel\Concerns\FromCollection;

class profileExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return business_profile::all();
    }
}