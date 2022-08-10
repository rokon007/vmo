<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\reviews;
use DB;
use App\Models\Companytb;
use App\Models\User;
use App\Models\Comment;


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
    public function UploadImage()
    {
        return view('admin.uploadimage');
    }
	//update_comment
	 public function update_comment()
    {
        DB::update('update comments set comment_status = ? where comment_status = ?',[0,1]);
		return redirect()->back();
    }
   
}
