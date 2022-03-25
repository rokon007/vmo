<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\reviews;
use App\Models\Companytb;
use DB;

class WelcomeController extends Controller
{
     public function welcomeindex()
   {
       $reviewsdata = DB::table('companytbs')
            ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
             
              ->whereNull('reviews.show')
            ->select('companytbs.*','reviews.company_id as id','reviews.*','companytbs.id  as company_id')
            ->get();
      

    $Allcategories=Category::All();
    $categories=Category::whereNull('category_id')->limit(12)->get();
   
    $CompanyNameData=Companytb::All();
     
     return view('welcome',compact('categories','Allcategories','reviewsdata','CompanyNameData'));
    

   }
   public function givshow()
   {
   
     //company name sending  company_name
      $CompanyNameData=Companytb::All();
     
    
     return view('frontpage.reviewgiving',compact('CompanyNameData'));
   }

}
