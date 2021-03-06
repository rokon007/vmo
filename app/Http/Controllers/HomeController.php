<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\reviews;
use DB;
use App\Models\Companytb;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

       
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Allcategories=Category::All();
        $categories=Category::whereNull('category_id')->limit(12)->get();
        $Allreviews=reviews::All();
        $CompanyNameData=Companytb::All();
         // $reviewsdata = DB::table('companytbs')
         //    ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
             
              
         //    ->select('companytbs.*','reviews.company_id as id','reviews.*','companytbs.id  as company_id')
         //    ->get();
         $reviewsdata = DB::table('companytbs')
            ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
             
              ->whereNull('reviews.show')
            ->select('companytbs.*','reviews.company_id as id','reviews.*','companytbs.id  as company_id')
            ->get();
        return view('home',compact('categories','Allcategories','Allreviews','CompanyNameData','reviewsdata'));
    }
     public function login()
    {
        return view('login');
    }
 
    public function adminIndex()
    {
        $usercount=DB::table('users')->count();
         $categoriescount=DB::table('categories')->count();
         $reviewscount=DB::table('reviews')->whereNull('show')->count();
         $companycount=DB::table('companytbs')->count();

         // $UserClaim=User::where('is_staff','1');
         $UserClaim=DB::table('users')->where('is_staff',1)->get();
        return view('admin.adminhome',compact('UserClaim','usercount','categoriescount','reviewscount','companycount'));
    }
    
    public function UploadImage()
    {
        return view('admin.uploadimage');
    }
}
