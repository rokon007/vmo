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
            // ->get('reviews.created_at','desc')->limit(5);
            ->groupBy('reviews.id','companytbs.id','companytbs.email','companytbs.email','companytbs.company','companytbs.country','companytbs.city','companytbs.block','companytbs.contact','companytbs.category','companytbs.subcategory','companytbs.created_at','companytbs.updated_at','reviews.name','reviews.contact','reviews.purchaseditem','reviews.itemcounter','reviews.dateofpurchase','reviews.branchlocation','reviews.review','reviews.ratings','reviews.typeofpurchase','reviews.resolved','reviews.response','reviews.isresolved','reviews.whatsappreview','reviews.company_id','reviews.unlistedcompany','reviews.show','reviews.created_at','reviews.updated_at')
    ->orderBy('reviews.id', 'desc')
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
        ['redirect' => 'https://vimbisotest.herokuapp.com/login/facebook/callback'])
      ->redirect();
   
   

   }

}
