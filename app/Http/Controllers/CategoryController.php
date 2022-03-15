<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;
use App\Models\Companytb;

class CategoryController extends Controller
{
   public function subcat(Request $request)
   {
    // 
   }

   
public function viewcompany(Request $request,$name)
  {
   $CompanyNameData=Companytb::All();
    $RData = DB::table('users')
            ->join('business_profiles', 'users.id', '=', 'business_profiles.user_id')
              ->join('companytbs', 'users.email', '=', 'companytbs.email')
               ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
                 ->where('companytbs.subcategory',[$name])
            ->select('users.*', 'business_profiles.user_id as id', 'business_profiles.*','users.id as user_id','companytbs.*','users.email as email','reviews.*','companytbs.id  as company_id')
            ->get();

            $reviewscount = DB::table('users')
            ->join('business_profiles', 'users.id', '=', 'business_profiles.user_id')
              ->join('companytbs', 'users.email', '=', 'companytbs.email')
               ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
                 ->where('companytbs.subcategory',[$name])
                  ->select('users.*', 'business_profiles.user_id as id', 'business_profiles.*','users.id as user_id','companytbs.*','users.email as email','reviews.*','companytbs.id  as company_id')
             ->count();

              $ratings = DB::table('users')
            ->join('business_profiles', 'users.id', '=', 'business_profiles.user_id')
              ->join('companytbs', 'users.email', '=', 'companytbs.email')
               ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
                 ->where('companytbs.subcategory',[$name])
                  ->select('users.*', 'business_profiles.user_id as id', 'business_profiles.*','users.id as user_id','companytbs.*','users.email as email','reviews.*','companytbs.id  as company_id')
            ->sum('ratings');


     // $CData = DB::table('companytbs')->where('company',$company)->first();
 // $RData = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
 //           ->where('companytbs.company',[$company])
 //            ->get();
 // $reviewscount= Companytb::join('reviews','companytbs.id','=','reviews.company_id')
 //           ->where('companytbs.company',[$company])
 //           ->count();
 //    $ratings = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
 //           ->where('companytbs.company',[$company])
 //    ->sum('ratings');


       $joindata=companytb::where('subcategory',[$name])->get();
     
         
   
      return view('frontpage.search.companybycategory1',compact('joindata','CompanyNameData','RData','reviewscount','ratings')); 
  }




  
        

   

    public function viewcompany1(Request $request,$name)
  {
   // $CompanyNameData=Companytb::All();
   //  $joindata = DB::table('users')
   //          ->join('business_profiles', 'users.id', '=', 'business_profiles.user_id')
   //            ->join('companytbs', 'users.email', '=', 'companytbs.email')
   //             ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
   //               ->where('companytbs.category',[$name])
   //          ->select('users.*', 'business_profiles.user_id as id', 'business_profiles.*','users.id as user_id','companytbs.*','users.email as email','reviews.*','companytbs.id  as company_id')
   //          ->get();
 $CompanyNameData=Companytb::All();
     $joindata=companytb::where('category',[$name])->get();
      return view('frontpage.search.companybycategory1',compact('joindata','CompanyNameData')); 
  }

   public function create()
   {
    $Allcategories=Category::All();
    $categories=Category::whereNull('category_id')->get();
    $viewcategories=Category::where('status','1')->get();
    
     return view('admin.categories',compact('categories','Allcategories','viewcategories'));

   }
   public function store(Request $request)
   {
     $data = array(
        'name'=> $request->name,
        'category_id'=> $request->category_id,
      );
     $create=Category::create($data);
     return redirect()->route('categories.create');
   }   

    public function delete_category($id)
     {
      DB::delete('delete from categories where id=?',[$id]);
      return redirect()->route('categories.create')->with('success','Data deleted Successfully');
     }

   //--------------------------------------------------//

   public function FrontCategory()
   {
    $Allcategories=Category::All();
    $categories=Category::whereNull('category_id')->get();
    $viewcategories=Category::where('status','1')->get();

    $viewcategoriesgroup=Category::selectRaw('category_id,name')->get()
    ->groupBy('category_id');
    

         

    

        

    
       
     return view('frontpage.categories',compact('categories','Allcategories','viewcategories','viewcategoriesgroup'));
     
   }
}
