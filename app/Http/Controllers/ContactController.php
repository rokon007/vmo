<?php

namespace App\Http\Controllers;
use App\Models\VimbisoUser; 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; 
use App\Mail\Request_email; 
use App\Mail\Request_contact;

class ContactController extends Controller
{

        public function storeContactForm(Request $request) 

    {          
        $deatils=[
         'name'=>$request->input('name'),
         'email'=>$request->input('email'),
         'subject' => 'New Email',
         'message'=>$request->input('message')
        ];
        Mail::to("info@vimbiso.org")->send(new ContactMail($deatils));
        // return "Email Sent";
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']); 

    } 
	
	 public function RequestForEmail(Request $request) 

    {          
        $deatils=[
         'name'=>$request->input('name'),
         'email'=>$request->input('email'),
         'subject' => 'Request For Contact Email',
         'message'=>$request->input('message')
        ];
        Mail::to($request->input('company_email'))->cc("info@vimbiso.org")->send(new Request_email($deatils));
        // return "Email Sent";
        return redirect()->back()->with(['success' => 'Request For Contact Email Submited Successfully']); 

    } 
	
	//RequestForcontact
	public function RequestForcontact(Request $request) 

    {          
        $deatils=[
         'name'=>$request->input('name'),
         'email'=>$request->input('email'),
         'subject' => 'Request For Contact Email',
         'message'=>$request->input('message')
        ];
        Mail::to($request->input('company_email'))->cc("info@vimbiso.org")->send(new Request_contact($deatils));
		
        // return "Email Sent";
        return redirect()->back()->with(['success2' => 'Request For Contact Number Submited Successfully']); 

    } 
}
