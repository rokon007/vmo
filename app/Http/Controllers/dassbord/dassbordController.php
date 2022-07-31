<?php

namespace App\Http\Controllers\dassbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\reviews;
use DB;
use App\Models\Companytb;
use App\Models\User;
use App\Models\NewsletterSubscriber;

class dassbordController extends Controller
{
public function adminIndex()
    {
        $usercount=DB::table('users')->count();
         $categoriescount=DB::table('categories')->count();
         $reviewscount=DB::table('reviews')->whereNull('show')->count();
         $companycount=DB::table('companytbs')->count();

         // $UserClaim=User::where('is_staff','1');
         $UserClaim=DB::table('users')->where('is_staff',1)->orderBy('updated_at','DESC')->simplePaginate(5);
		 $nSubscriber=DB::table('newsletter_subscribers')
		  ->select('id','email','status','created_at')
		 ->orderBy('id','DESC')->simplePaginate(5);
		 $subscriberCount=DB::table('newsletter_subscribers')->count();
        return view('admin.adminhome',compact('subscriberCount','nSubscriber','UserClaim','usercount','categoriescount','reviewscount','companycount'));
    }
	

  public function NewsLetterIndex()
    {
		$nSubscriber=DB::table('newsletter_subscribers')
		  ->select('id','email','status','created_at')
		 ->orderBy('id','DESC')->get();
		  return view('admin.newsletter.index',compact('nSubscriber'));
	}
	
}
