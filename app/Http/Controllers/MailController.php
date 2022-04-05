<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

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
}
