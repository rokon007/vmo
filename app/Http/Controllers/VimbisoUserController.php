<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UserExport;
use App\Imports\UsersImport;
use Excel;
use App\Models\VimbisoUser;
use App\Models\User;

class VimbisoUserController extends Controller
{
   public function view_adduser()
    {
        
        return view('admin.adduser');
    }

    public function create()
   {
    $VimbisoUser_Data=User::All();
   
    
     return view('admin.user',compact('VimbisoUser_Data'));

   }
    public function exportUser()
    {
        return Excel::download(new UserExport,'users.xlsx');

    }

    public function importUser(Request $request)
    {
      // $this->validate($request,['select_file' =>'required|mimes:xls,xlsx']);
     
       Excel::import(new UsersImport,$request->file('file'));
      
       return back()->with('success','Excel Data Imported successfully');
    }

    
}
