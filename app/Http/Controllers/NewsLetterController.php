<?php

namespace App\Http\Controllers;


use Session;
use App\Models\NewsletterSubscriber;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DB;
use App\Models\Comment;

class NewsLetterController extends Controller
{
	//21:34
    public function addSubscriber(Request $request)
    {
		if($request->subscriber_email){
			
			$subscriberCount=NewsletterSubscriber::where('email',$request->subscriber_email)->count();
			if($subscriberCount>0){
				//Session::flash('erorr', 'You have already subscribed');
                //return redirect()->back();
				 return back()->with('erorr','You have already subscribed');
			}else{
				$newsletter=new NewsletterSubscriber;
				$newsletter->email=$request->subscriber_email;
				$newsletter->status=1;
				$newsletter->save();
				
				//insert in to comments table
				$comments = new Comment();
		        $comments->comment_subject ="New Subscriber";
                $comments->comment_text =$request->subscriber_email;               
                $comments->comment_status = 1;
                //$comments->user_id = Auth::user()->id;              
                $comments->link ="#";               
                $comments->save();
				
				
			   return back()->with('success','SUBSCRIBED SUCCESSFULLY!');
			}
		}


		// \DB::table('newsletter_subscribers')->insert([
  //           'email' => $request->Code, //This Code coming from ajax request
  //           'status' =>1, //This Chief coming from ajax request
  //       ]);

  //       return response()->json(
  //           [
  //               'success' => true,
  //               'message' => 'Data inserted successfully'
  //           ]
  //       );
	}
}
