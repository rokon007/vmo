<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\reviews;
use App\Models\Companytb;

class WelcomeController extends Controller
{
     public function welcomeindex()
   {
    $Allcategories=Category::All();
    $categories=Category::whereNull('category_id')->limit(12)->get();
   $Allreviews=reviews::All();
    $CompanyNameData=Companytb::All();
     
     return view('welcome',compact('categories','Allcategories','Allreviews','CompanyNameData'));
    

   }
}
