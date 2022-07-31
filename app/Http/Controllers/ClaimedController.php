<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\reviews;
use DB;
use App\Models\Companytb;
use App\Models\User;
use App\Models\NewsletterSubscriber;

class ClaimedController extends Controller
{
  
	
	   
   public function adminIndex()	   
    {
       $user_id=auth()->user()->id;
       $company=auth()->user()->company_name;
	   $email=auth()->user()->email;
          try {
			  $e=5;
       $CData = DB::table('companytbs')
	   ->join('business_profiles', 'companytbs.email', '=', 'business_profiles.email')
	   ->where('company',$company)->first();
	
     $RData = DB::table('companytbs')
            ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
             
               ->where('companytbs.company',[$company])
            ->select('companytbs.*','reviews.company_id as id','reviews.*','companytbs.id  as company_id')
            // ->get('reviews.created_at','desc')->limit(5);
            ->groupBy('reviews.id','companytbs.id','companytbs.email','companytbs.email','companytbs.company','companytbs.country','companytbs.city','companytbs.block','companytbs.contact','companytbs.category','companytbs.subcategory','companytbs.created_at','companytbs.updated_at','reviews.name','reviews.contact','reviews.purchaseditem','reviews.itemcounter','reviews.dateofpurchase','reviews.branchlocation','reviews.review','reviews.ratings','reviews.typeofpurchase','reviews.resolved','reviews.response','reviews.isresolved','reviews.whatsappreview','reviews.company_id','reviews.unlistedcompany','reviews.show','reviews.created_at','reviews.updated_at')
    ->orderBy('reviews.id', 'desc')
    ->get();
	
	   
	   
 $RDataX = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
            ->get();
 $reviewscount= Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
           ->count();
    $ratings = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
    ->sum('ratings');
	
	 $ratings1 = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
          ->where('companytbs.company',[$company])
        ->where('reviews.ratings','1')
    ->count();
	$ratings2 = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
        ->where('reviews.ratings','2')
    ->count();
	$ratings3 = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
        ->where('reviews.ratings','3')
    ->count();
	$ratings4 = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
        ->where('reviews.ratings','4')
    ->count();
	$ratings5 = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
             ->where('companytbs.company',[$company])
        ->where('reviews.ratings','5')
    ->count();
    } catch (ModelNotFoundException $exception) {
        return back()->withError($exception->getMessage())->withInput();
    }
	$CPMY=DB::table('companytbs') ->where('email',$email)->first();
	$cid=$CPMY->id;
    $RT = DB::table('reviews') ->where('company_id',$cid)->get();



// return $CData;
 
     return view('frontpage.claimed.adminhome',compact('RT','CData','RData','reviewscount','ratings','ratings1','ratings2','ratings3','ratings4','ratings5'));
   }
	

  public function NewsLetterIndex()
    {
		$nSubscriber=DB::table('newsletter_subscribers')
		  ->select('id','email','status','created_at')
		 ->orderBy('id','DESC')->get();
		  return view('frontpage.claimed.newsletter.index',compact('nSubscriber'));
	}
	
}
