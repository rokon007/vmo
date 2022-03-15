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
   

   function indexprofile($company)
    {
$CData = DB::table('companytbs')->where('company',$company)->first();
 $RData = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
            ->get();
 $reviewscount= Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
           ->count();
    $ratings = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
    ->sum('ratings');

// return $CData;
 
     return view('frontpage.profile',compact('CData','RData','reviewscount','ratings'));
   }

     public function indexsettings()
    {
        $CompanyNameData=Companytb::All();
        return view('frontpage.settings',compact('CompanyNameData'));
    }

    //------------------------
    //**************************************************************************************************************************************************************************************



    public function setcompany()
    {
        $UserData=Companytb::All();
        return view('admin.setcompany',compact('UserData'));
    }
    function usercompany($id)
    {
        $Allcategories=Category::All();
        $categories=Category::whereNull('category_id')->get();
        $CompanyData=Companytb::find($id);
    return view('admin.companybelong',['CompanyData' => $CompanyData,'Allcategories'=> $Allcategories,'categories'=> $categories ]);
    }

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
   

  

   public function Reviews()
   {
      return view('admin.reviews');
   }

   // COMPANY UPDATE
     // public function show($id)
     //  {
     //  $users = DB::select('select * from companytbs where id = ?',[$id]);
     //  return view('stud_update',['users'=>$users]);
     //   }
        
         public function companyedit(Request $request, $cid)
          {
            $category = $request->input('category');
            $subcategory = $request->input('subcategory');
        DB::update('update companytbs set category = ?,subcategory=? where id = ?',[$category,$subcategory,$cid]);
          return redirect()->route('admin.company_set')->with('success','Record updated successfully');
        
            }


   // REVIEW SAVE

public function give(Request $request)
   {
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
     return redirect()->route('welcome')->with('success','Review aded Successfully');
   }
  

}
