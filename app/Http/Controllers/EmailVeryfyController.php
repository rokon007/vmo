<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VimbisoUser;

class EmailVeryfyController extends Controller
{
   public function emailshow()
   {
    
      $EmailData=VimbisoUser::All();
    
     return view('admin.emailverify',compact('EmailData'));

   }
}
