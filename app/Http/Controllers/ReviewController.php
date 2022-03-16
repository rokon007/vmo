<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reviews;
use App\Models\VimbisoUser;
use DB;
use App\Models\Companytb;


class ReviewController extends Controller
{
   public function create()
   {
    $ReviewData=reviews::All();
     //company name sending  company_name
      $CompanyNameData=Companytb::All();
     
    
     return view('admin.reviews',compact('ReviewData','CompanyNameData'));
   }


  
   public function store(Request $request)
   {
     // $data = array(
     //    'name'=> $request->name,        
     //    'contact'=> $request->contact,
     //    'purchaseditem'=> $request->purchaseditem,
     //    'itemcounter'=> $request->itemcounter,
     //    'dateofpurchase'=> $request->dateofpurchase,
     //    'branchlocation'=> $request->branchlocation,
     //    'review'=> $request->review,
     //    'ratings'=> $request->ratings,
     //    'typeofpurchase'=> $request->typeofpurchase,
     //    'resolved'=> $request->resolved,
     //    'response'=> $request->response,
     //    'isresolved'=> $request->isresolved,
     //    'whatsappreview'=> $request->whatsappreview,
     //    'company_id'=> $request->company,
     //    'unlistedcompany'=> $request->unlistedcompany,
     //  );
     // $create=reviews::create($data);

      $reviews= new reviews;
      $reviews->name=$request->input('name');
      $reviews->contact=$request->input('contact');
      
      $reviews->purchaseditem=$request->input('purchaseditem');
      $reviews->itemcounter=$request->input('itemcounter');
      $reviews->dateofpurchase=$request->input('dateofpurchase');
      $reviews->branchlocation=$request->input('branchlocation');
      $reviews->review=$request->input('review');
      $reviews->ratings=$request->input('ratings');
      $reviews->typeofpurchase=$request->input('typeofpurchase');
      $reviews->resolved=$request->input('resolved');
      $reviews->response=$request->input('response');
      $reviews->isresolved=$request->input('isresolved');
      $reviews->whatsappreview=$request->input('whatsappreview');
      $reviews->company_id=$request->input('company_id');
      $reviews->unlistedcompany=$request->input('unlistedcompany');
      $reviews->save();

     return redirect()->route('reviews.create')->with('success','Review aded Successfully');
   }


   

 /* public function delete($id)
     {reviews
       $data=reviews::find($id);
       $data->delete();
       return redirect()->route('reviews.create');
     }*/

     public function delete_funtion($id)
     {
      DB::delete('delete from reviews where id=?',[$id]);
      return redirect()->route('reviews.create')->with('success','Data deleted Successfully');
     }
}
