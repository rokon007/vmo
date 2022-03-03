<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Excel;
use App\Imports\UserImport;
use App\Models\reviews;
use DB;
use App\Models\Companytb;

class pagecontroller extends Controller
{

    //--------------------------------------Companytb
     public function about()
    {
        $CompanyNameData=Companytb::All();
        return view('frontpage.about',compact('CompanyNameData'));
    }
   
    
     public function plans()
    {
        $CompanyNameData=Companytb::All();
        return view('frontpage.plans',compact('CompanyNameData'));
    }
     
    public function contactus()
    {
        $CompanyNameData=Companytb::All();
        return view('frontpage.contactus',compact('CompanyNameData'));
    }
    //-------------------------
    //indexprofile
    public function indexprofile()
    {
        $CompanyNameData=Companytb::All();
        return view('frontpage.profile',compact('CompanyNameData'));
    }
     public function indexsettings()
    {
        $CompanyNameData=Companytb::All();
        return view('frontpage.settings',compact('CompanyNameData'));
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

public function give(Request $request)
   {
     $data = array(
        'name'=> $request->name,        
        'contact'=> $request->contact,
        'purchaseditem'=> $request->purchaseditem,
        'itemcounter'=> $request->itemcounter,
        'dateofpurchase'=> $request->dateofpurchase,
        'branchlocation'=> $request->branchlocation,
        'review'=> $request->review,
        'ratings'=> $request->ratings,
        'typeofpurchase'=> $request->typeofpurchase,
        'resolved'=> $request->resolved,
        'response'=> $request->response,
        'isresolved'=> $request->isresolved,
        'whatsappreview'=> $request->whatsappreview,
        'company'=> $request->company,
        'unlisted company'=> $request->unlistedcompany,
      );
     $create=reviews::create($data);
     return redirect()->route('welcome')->with('success','Review aded Successfully');;
   }
  

}
