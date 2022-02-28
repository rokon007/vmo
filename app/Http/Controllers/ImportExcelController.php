<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class ImportExcelController extends Controller
{
   function index()
   {
    $data =DB::table('user2s')->orderBy('id','DESC')->get();
    return view('admin.user',compact('data'));
    
   }
   function import(Request $request)
   {
    $this->validate($request,[

        'select_file' =>'required|mimes:xls,xlsx'
    ]);
    $path=$request->file('select_file')->getRealPath();
    $data=Excel::load($path)->get();

    if($data->count()>0)
    {
        foreach($data->toArray() as $key => $value)
        {
            foreach($value as $row)
            {
                $insert_data[] = array(
                     'id' => $row['id'],
                     'password' => $row['password'],
                     'last_login' => $row['last_login'],
                     'is_superuser' => $row['is_superuser'],
                     'groups' => $row['groups'],
                     'user_permissions' => $row['user_permissions'],
                     'username' => $row['username'],
                     'first_name' => $row['first_name'],
                     'last_name' => $row['last_name'],
                     'email' => $row['email'],
                     'is_staff' => $row['is_staff'],
                     'is_active' => $row['is_active'],
                     'date_joined' => $row['date_joined'],
                     'company_name' => $row['company_name'],
                     'country' => $row['country'],
                     'city' => $row['city'],
                     'block' => $row['block'],
                     'contact' => $row['contact'],
                     'level' => $row['level'],
                ); 
            }
        }
        if(!empty($insert_data))
        {
            DB::table('user2s')->insert($insert_data);
        }
    }
    return back()->with('success','Excel Data Imported successfully');
   }
}
