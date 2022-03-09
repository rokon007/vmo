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
    $joindata = DB::table('users')
            ->join('business_profiles', 'users.id', '=', 'business_profiles.user_id')
              ->join('companytbs', 'users.id', '=', 'companytbs.user_id')
               ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
                 ->where('companytbs.subcategory',[$name])
            ->select('users.*', 'business_profiles.user_id as id', 'business_profiles.*','users.id as user_id','companytbs.*','users.id as user_id','reviews.*','companytbs.company as company')
            ->get();

      return view('frontpage.search.companybycategory',compact('joindata','CompanyNameData'));
  }




  
        

   //  public function viewcompany(Request $request,$name)
   // {
     

   //    $CompanyData=companytb::where('subcategory',[$name])->get();
   //      $CompanyNameData=Companytb::All();
   //   return view('frontpage.search.companybycategory',compact('CompanyData','CompanyNameData')); 
      
   // }

   // public function viewcompany1(Request $request,$name)
   // {
         

   //    $CompanyData1=companytb::where('category',[$name])->get();
   //      $CompanyNameData=Companytb::All();
   //   return view('frontpage.search.companybycategory1',compact('CompanyData1','CompanyNameData')); 
      
   // }

    public function viewcompany1(Request $request,$name)
  {
   $CompanyNameData=Companytb::All();
    $joindata = DB::table('users')
            ->join('business_profiles', 'users.id', '=', 'business_profiles.user_id')
              ->join('companytbs', 'users.id', '=', 'companytbs.user_id')
               ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
                 ->where('companytbs.category',[$name])
            ->select('users.*', 'business_profiles.user_id as id', 'business_profiles.*','users.id as user_id','companytbs.*','users.id as user_id','reviews.*','companytbs.company as company')
            ->get();

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
