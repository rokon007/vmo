<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Excel;
use App\Imports\UserImport;
use App\Models\reviews;
use DB;
use App\Models\Companytb;
use App\Models\User;
use App\Models\Category;
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

 // public function SetUser(Request $request,$id)
 //   {
 //       // $UserData=User::where('id',[$id])->get(); 
 //     // $UserData=DB::('select * from users where id=?',[$id]);
 //     $UserData=DB::table('users')->where('id',[$id])->get();
 //      return view('admin.userset',compact('UserData'));  


   
 //   }

   function SetUser($id)
   {
     $Allcategories=Category::All();
    $categories=Category::whereNull('category_id')->get();
    // $cat6=Category::where!Null('category_id')->get();
    $UserData=User::find($id);
    return view('admin.userset',['UserData' => $UserData,'Allcategories'=> $Allcategories,'categories'=> $categories ]);
   }

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
     //return "Record are imported successfully!";company_id
   //}

   public function Reviews()
   {
      return view('admin.reviews');
   }

public function give(Request $request)
   {
     // $data = array(
     //    'name'=> $request->name,        
     //    'contact'=> $request->contact,
     //    'purchaseditem'=> $request->purchaseditem,
     //    'itemcounter'=> $request->itemcounter,
     //    'dateofpurchase'=> $request->dateofpurchase,
     //    'branchlocation'=> $request->branchlocation,
     //    'review'=> $request->review,
     //    'ratings'=> $request->ratings,
     //    'typeofpurchase'=> $request->typeofpurchase,
     //    'resolved'=> $request->resolved,
     //    'response'=> $request->response,
     //    'isresolved'=> $request->isresolved,
     //    'whatsappreview'=> $request->whatsappreview,
     //    'company_id'=> $request->company_id,
     //    'unlisted company'=> $request->unlistedcompany,
     //  );
     // $create=reviews::create($data);
    $reviews= new reviews;
      $reviews->name=$request->input('name');
      $reviews->contact=$request->input('contact');
      
      $reviews->purchaseditem=$request->input('purchaseditem');
      $reviews->itemcounter=$request->input('itemcounter');
      $reviews->dateofpurchase=$request->input('dateofpurchase');
      $reviews->branchlocation=$request->input('branchlocation');
      $reviews->review=$request->input('review');
      $reviews->ratings=$request->input('ratings');
      $reviews->typeofpurchase=$request->input('typeofpurchase');
      $reviews->resolved=$request->input('resolved');
      $reviews->response=$request->input('response');
      $reviews->isresolved=$request->input('isresolved');
      $reviews->whatsappreview=$request->input('whatsappreview');
      $reviews->company_id=$request->input('company_id');
      $reviews->unlistedcompany=$request->input('unlistedcompany');
      $reviews->save();
     return redirect()->route('welcome')->with('success','Review aded Successfully');;
   }
  

}
