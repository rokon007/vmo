<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\reviews;
use\App\Models\VimbisoUser;


class ReviewController extends Controller
{
   public function create()
   {
    $ReviewData=reviews::All();
     //company name sending  company_name
      $CompanyNameData=VimbisoUser::All();
    
     return view('admin.reviews',compact('ReviewData','CompanyNameData'));

   }


  
  


   public function store(Request $request)
   {
     $data = array(
        'name'=> $request->name,        
        'contact'=> $request->contact,
        'purchaseditem'=> $request->purchaseditem,
        'itemcounter'=> $request->itemcounter,
        'dateofpurchase'=> $request->dateofpurchase,
        'branchlocation'=> $request->branchlocation,
        'review'=> $request->review,
        'ratings'=> $request->ratings,
        'typeofpurchase'=> $request->typeofpurchase,
        'resolved'=> $request->resolved,
        'response'=> $request->response,
        'isresolved'=> $request->isresolved,
        'whatsappreview'=> $request->whatsappreview,
        'company'=> $request->company,
        'unlisted company'=> $request->unlistedcompany,
      );
     $create=reviews::create($data);
     return redirect()->route('reviews.create');
   }
}
