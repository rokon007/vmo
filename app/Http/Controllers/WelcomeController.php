<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Category;

class WelcomeController extends Controller
{
     public function welcomeindex()
   {
    $Allcategories=Category::All();
    $categories=Category::whereNull('category_id')->limit(12)->get();
   
     
     return view('welcome',compact('categories','Allcategories'));
    

   }
}
