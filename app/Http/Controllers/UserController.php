<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Exports\UserExport;
use App\Imports\UsersImport;
use Excel;

class UserController extends Controller
{
    public function exportUser()
    {
        return Excel::download(new UserExport,'users.xlsx');
    }

    public function importUser(Request $request)
    {
       Excel::import(new UsersImport,$request->file('file'));
    }
    

    

}
