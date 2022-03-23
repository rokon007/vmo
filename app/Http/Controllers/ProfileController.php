<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Models\business_profile;
use App\Imports\profileImport;
use App\Exports\profileExport;

class ProfileController extends Controller
{
     public function importprofiles(Request $request)
    {
      // $this->validate($request,['select_file' =>'required|mimes:xls,xlsx']);
     
       Excel::import(new profileImport,$request->file('file'));
      
       return back()->with('success','Excel Data Imported successfully');
    }
    public function exportprofile()
    {
        return Excel::download(new profileExport,'profile.xlsx');

    }
}
