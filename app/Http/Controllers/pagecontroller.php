<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Excel;
use App\Imports\UserImport;

class pagecontroller extends Controller
{

    //--------------------------------------
     public function about()
    {
        return view("frontpage.about");
    }
   
    
     public function plans()
    {
        return view("frontpage.plans");
    }
     
    public function contactus()
    {
        return view("frontpage.contactus");
    }
    //-------------------------
    //indexprofile
    public function indexprofile()
    {
        return view('profile');
    }
     public function indexsettings()
    {
        return view('settings');
    }

    //------------------------
    //**************************************************************************************************************************************************************************************



   public function adminlogin()
   {
      return view('adminlogin');
   }

  
    public function pagesetting()
   {
      return view('admin.pagesetting');
   }
    public function categories()
   {
      return view('admin.categories');
   }
   

   //public function importUser()
  // {
    //  return view('admin.user');
  // }
   //public function import(Request $request)
   //{
    // Excel:: import(new UserImport,$request->file);
     //return "Record are imported successfully!";
   //}

   public function Reviews()
   {
      return view('admin.reviews');
   }


  

}
