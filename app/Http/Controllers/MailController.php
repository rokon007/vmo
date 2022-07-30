<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Mail\NewsLetterMail;
use App\Models\NewsletterSubscriber;

class MailController extends Controller
{
    public function sendEmail()
    {
        $deatils=[
         'title'=>'Mail from subside media',
         'body'=>'this is testing email'
        ];
        Mail::to("info@vimbiso.org")->send(new TestMail($deatils));
        return "Email Sent";
    }
	
	
	    public function sendNewsLetterEmail(Request $request)

    {
        //$users = NewsletterSubscriber::all();
        $users = NewsletterSubscriber::where("status", 1)->get();
        $deatils=$request->description;
		$deatils= $request->description;
        
        
  

        foreach ($users as $key => $user) {

            Mail::to($user->email)->send(new NewsLetterMail($deatils));

        }

  
        return back()->with('success','Send NewsLetter email successfully.');
       // return response()->json(['success'=>'Send email successfully.']);

    }
}
