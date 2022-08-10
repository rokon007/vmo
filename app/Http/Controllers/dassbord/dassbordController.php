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
		 //comment
		  $comment=DB::table('comments')
          ->orderBy('comments.id', 'DESC') ->simplePaginate(10); 
		  
		  
		  $company = DB::table('companytbs')
                   ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
                   ->join('business_profiles', 'companytbs.email', '=', 'business_profiles.email')
                   ->select('companytbs.id as id','companytbs.company as company','companytbs.email as email',
				   'companytbs.country as country','companytbs.city as city','companytbs.block as block',
				   'companytbs.contact as contact','companytbs.category as category',
				   'companytbs.subcategory as subcategory', DB::raw('count(reviews.id) as count'),
				   DB::raw('SUM(reviews.ratings) as totalratings'),'business_profiles.image as image')

                 ->groupBy('companytbs.id','companytbs.company','companytbs.country','companytbs.city','companytbs.block',
                 'companytbs.contact','companytbs.category','companytbs.subcategory','companytbs.email',
				 'business_profiles.image')
                 //->orderByDesc('totalratings')
                 //->limit(10);
		          ->limit(10)->offset(10)->orderByDesc('totalratings')->get();
		  
		  
        return view('admin.adminhome',compact('company','comment','subscriberCount','nSubscriber','UserClaim','usercount','categoriescount','reviewscount','companycount'));
    }
	

  public function NewsLetterIndex()
    {
		$nSubscriber=DB::table('newsletter_subscribers')
		  ->select('id','email','status','created_at')
		 ->orderBy('id','DESC')->get();
		  return view('admin.newsletter.index',compact('nSubscriber'));
	}
	
}
