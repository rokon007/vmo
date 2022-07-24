<?php

namespace App\Http\Controllers;

use App\Models\reviews;
use DB;
use Illuminate\Http\Request;

class GiveawayController extends Controller
{
     public function index()
    {
        $posts = reviews::orderBy('created_at', 'DESC')->get();
        return view('admin.giveaway.index', compact('posts'));
    }
	 public function edit( $id)
    {
        $Rewards = reviews::find($id);
       $RData = DB::table('companytbs')
            ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
             
              
            ->select('companytbs.company as cname','reviews.company_id as id','reviews.*','companytbs.id  as company_id')
             ->where('reviews.id',$id)
           ->first();
        return view('admin.giveaway.edit', compact(['id', 'Rewards','RData']));
    }
	 public function updategiveaway (Request $request, int $id)
{
      $reviews = reviews::find($id); 
     
      if($request->has('itemcounter')){
          $itemcounter = implode(',', $request->input('itemcounter'));
           $reviews->itemcounter = $itemcounter;
        }else{
            $itemcounter = 0;
           $reviews->itemcounter = $itemcounter;
        }
        
      $reviews->update();
       
    return redirect()->route('giveaway.index')->with('success','Giveaway Updated Successfully');
}
}
