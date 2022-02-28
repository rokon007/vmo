<?php

namespace App\Exports;

use App\Models\VimbisoUser;
use Maatwebsite\Excel\Concerns\FromCollection;

class VimbisoUserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return VimbisoUser::all();
    }
}
