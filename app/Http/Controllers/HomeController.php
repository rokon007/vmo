<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\reviews;
use DB;
use App\Models\Companytb;

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
        return view('home',compact('categories','Allcategories','Allreviews','CompanyNameData'));
    }
     public function login()
    {
        return view('login');
    }
 
    public function adminIndex()
    {
        $usercount=DB::table('vimbiso_users')->count();
         $categoriescount=DB::table('categories')->count();
         $reviewscount=DB::table('reviews')->count();
         $companycount=DB::table('companytbs')->count();
        return view('admin.adminhome',compact('usercount','categoriescount','reviewscount','companycount'));
    }
    
    public function rokon()
    {
        return view('rokon');
    }
}
