<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\reviews;
use App\Models\Companytb;
use DB;
use Laravel\Socialite\Facades\Socialite;

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
   public function redirect()
   {
     // return Socialite::driver('google')->redirect();
      return Socialite::driver('google')
    ->with(
        ['client_id' => '989521392121-au4k06d79m7qq0f0dnu8aupqfe9k1gvs.apps.googleusercontent.com'],
        ['client_secret' => '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'],
        ['redirect' => 'https://vimbisotest.herokuapp.com/review/google/callback'])
    ->redirect();

   }


   public function redirectfacebook()
   {
     // return Socialite::driver('google')->redirect();
      return Socialite::driver('facebook') 
          ->with(
        ['client_id' => '413235483803463'],
        ['client_secret' => '826c846b7a30eff16a63f7e45711b69f'],
        ['redirect' => 'redirect' => 'http://vimbisotest.herokuapp.com/login/facebook/callback'])
      ->redirect();
   
   

   }

}
