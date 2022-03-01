<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\VimbisoUserExport;
use App\Imports\VimbisoUserImport;
use Excel;
use App\Models\VimbisoUser;

class VimbisoUserController extends Controller
{
    public function create()
   {
    $VimbisoUser_Data=VimbisoUser::All();
   
    
     return view('admin.user',compact('VimbisoUser_Data'));

   }
    public function exportUser()
    {
        return Excel::download(new VimbisoUserExport,'users.xlsx');

    }

    public function importUser(Request $request)
    {
      // $this->validate($request,['select_file' =>'required|mimes:xls,xlsx']);
     
       Excel::import(new VimbisoUserImport,$request->file('file'));
      
       return back()->with('success','Excel Data Imported successfully');
    }
}
