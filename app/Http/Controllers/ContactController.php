<?php

namespace App\Http\Controllers;
use App\Models\VimbisoUser; 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; 
use App\Mail\Request_email; 
use App\Mail\Request_contact;
use App\Models\Comment;

class ContactController extends Controller
{

        public function storeContactForm(Request $request) 

    { $name=$request->input('name');
        //insert in to comments table
		$comments = new Comment();
		$comments->comment_subject ="Contact Form Submited";
        $comments->comment_text = "By $name ";                
        $comments->comment_status = 1;           
        $comments->link ="#";              
        $comments->save();
	
        $deatils=[
         'name'=>$request->input('name'),
         'email'=>$request->input('email'),
         'subject' => 'New Email',
         'message'=>$request->input('message')
        ];
        Mail::to("info@vimbiso.info")->send(new ContactMail($deatils));
        // return "Email Sent";
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']); 

    } 
	
	 public function RequestForEmail(Request $request) 

    { 
	     $name=$request->input('name');
         //insert in to comments table
		$comments = new Comment();
		$comments->comment_subject ="Request For Contact Email Submited";
        $comments->comment_text = "By $name ";                
        $comments->comment_status = 1;            
        $comments->link ="#";              
        $comments->save();
		
        $deatils=[
         'name'=>$request->input('name'),
         'email'=>$request->input('email'),
         'subject' => 'Request For Contact Email',
         'message'=>$request->input('message')
        ];
        Mail::to($request->input('company_email'))->cc("info@vimbiso.info")->send(new Request_email($deatils));
        // return "Email Sent";
        return redirect()->back()->with(['success' => 'Request For Contact Email Submited Successfully']); 

    } 
	
	//RequestForcontact
	public function RequestForcontact(Request $request) 

    {
		$name=$request->input('name');
         //insert in to comments table
		$comments = new Comment();
		$comments->comment_subject ="Request For Contact Number Submited";
        $comments->comment_text = "By $name ";                
        $comments->comment_status = 1;            
        $comments->link ="#";              
        $comments->save();
		
        $deatils=[
         'name'=>$request->input('name'),
         'email'=>$request->input('email'),
         'subject' => 'Request For Contact Email',
         'message'=>$request->input('message')
        ];
        Mail::to($request->input('company_email'))->cc("info@vimbiso.info")->send(new Request_contact($deatils));
		
        // return "Email Sent";
        return redirect()->back()->with(['success2' => 'Request For Contact Number Submited Successfully']); 

    } 
}
