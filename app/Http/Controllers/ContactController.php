<?php

namespace App\Http\Controllers;
use App\Models\VimbisoUser; 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; 

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
}
