<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\user2;
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
    public function userpage()
   {
      $Alluser=user2::All();
      return view('admin.user',compact('Alluser'));
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
