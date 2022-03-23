<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;
use App\Models\Companytb;
use Excel;
use App\Imports\CategoryImport;
use App\Exports\CategoryExport;

class CategoryController extends Controller
{
   public function subcat(Request $request)
   {
    // 
   }

   
public function viewcompany(Request $request,$name)
  {
   $CompanyNameData=Companytb::All();
      // $RData12 =  Companytb::where('subcategory',[$name])
      // ->with('reviews')
      // ->get();
     
   

         $RData1 = DB::table('companytbs')
->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
 ->join('business_profiles', 'companytbs.email', '=', 'business_profiles.email')
->select('companytbs.company as company','companytbs.email as email','companytbs.country as country','companytbs.city as city','companytbs.block as block','companytbs.contact as contact','companytbs.category as category','companytbs.subcategory as subcategory', DB::row("count(reviews.id) as count"), DB::row("sum(reviews.ratings) as Totalratings"),'business_profiles.image as image')
 ->where('companytbs.subcategory',[$name])
->groupBy('companytbs.company','companytbs.country','companytbs.city','companytbs.block','companytbs.contact','companytbs.category','companytbs.subcategory','companytbs.email','business_profiles.image')
->paginate(4);

    $RData = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
     ->select('companytbs.*','reviews.company_id as id','reviews.ratings','companytbs.id  as company_id')
           ->where('companytbs.subcategory',[$name])
            ->get();

           $reviewscount= Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.subcategory',[$name])
           ->count();
    $ratings = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.subcategory',[$name])
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



    $joindata = DB::table('users')
            // ->join('business_profiles', 'users.id', '=', 'business_profiles.user_id')
     ->join('business_profiles', 'users.email', '=', 'business_profiles.email')
              ->join('companytbs', 'users.email', '=', 'companytbs.email')
               ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
                 ->where('companytbs.subcategory',[$name])
            ->select('users.*', 'business_profiles.user_id as id', 'business_profiles.*','users.id as user_id','companytbs.*','users.email as email','reviews.*','companytbs.id  as company_id')
            ->paginate(4);


       // $joindata=companytb::where('subcategory',[$name])->paginate(4);
     
         
   
      return view('frontpage.search.companybycategory1',compact('RData1','CompanyNameData','reviewscount','ratings')); 
  }




  
        

   

    public function viewcompany1(Request $request,$name)
  {
   $CompanyNameData=Companytb::All();
    $joindata = DB::table('users')
            // ->join('business_profiles', 'users.id', '=', 'business_profiles.user_id')
     ->join('business_profiles', 'users.email', '=', 'business_profiles.email')
              ->join('companytbs', 'users.email', '=', 'companytbs.email')
               ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
                 ->where('companytbs.category',[$name])
            ->select('users.*', 'business_profiles.user_id as id', 'business_profiles.*','users.id as user_id','companytbs.*','users.email as email','reviews.*','companytbs.id  as company_id')
            ->paginate(4);

            $reviewscount= Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.category',[$name])
           ->count();
    $ratings = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.category',[$name])
    ->sum('ratings');
    $RData1 = DB::table('companytbs')
->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
 ->join('business_profiles', 'companytbs.email', '=', 'business_profiles.email')
->select('companytbs.company as company','companytbs.email as email','companytbs.country as country','companytbs.city as city','companytbs.block as block','companytbs.contact as contact','companytbs.category as category','companytbs.subcategory as subcategory', DB::row("count(reviews.id) as count"), DB::row("sum(reviews.ratings) as Totalratings"),'business_profiles.image as image')
 ->where('companytbs.category',[$name])
->groupBy('companytbs.company','companytbs.country','companytbs.city','companytbs.block','companytbs.contact','companytbs.category','companytbs.subcategory','companytbs.email','business_profiles.image')
->paginate(4);
 
     // $joindata=companytb::where('category',[$name])->paginate(4);
      return view('frontpage.search.companybycategory1',compact('RData1','CompanyNameData','reviewscount','ratings')); 
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
   public function exportcategory()
    {
        return Excel::download(new CategoryExport,'category.xlsx');

    }

    public function importCategory(Request $request)
    {
      // $this->validate($request,['select_file' =>'required|mimes:xls,xlsx']);
     
       Excel::import(new CategoryImport,$request->file('file'));
      
       return back()->with('success','Excel Data Imported successfully');
    }


    public function search(Request $request)
    {
      $CompanyNameData=Companytb::All();
      $searchtext= $request->search1;
    //   $reviewscount= Companytb::join('reviews','companytbs.id','=','reviews.company_id')
    //        ->where('companytbs.category',[$name])
    //        ->count();
    // $ratings = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
    //        ->where('companytbs.category',[$name])
     $RData1 = DB::table('companytbs')
->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
 ->join('business_profiles', 'companytbs.email', '=', 'business_profiles.email')
->select('companytbs.company as company','companytbs.email as email','companytbs.country as country','companytbs.city as city','companytbs.block as block','companytbs.contact as contact','companytbs.category as category','companytbs.subcategory as subcategory', DB::row("count(reviews.id) as count"), DB::row("sum(reviews.ratings) as Totalratings"),'business_profiles.image as image')
 ->where('company','LIKE','%'.$searchtext.'%')
->groupBy('companytbs.company','companytbs.country','companytbs.city','companytbs.block','companytbs.contact','companytbs.category','companytbs.subcategory','companytbs.email','business_profiles.image')
->paginate(4);






// return $searchtext;

      // $RData1=Companytb::where('company','LIKE','%'.$searchtext.'%')->paginate(4);

       return view('frontpage.search.companybycategory1',compact('RData1','CompanyNameData')); 
    }
}

