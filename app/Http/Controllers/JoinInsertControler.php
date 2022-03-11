<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\business_profile;
use DB;
use App\Models\Companytb;
use App\Models\User;

class JoinInsertControler extends Controller
{
   public function Saverecord(Request $request)
   {


      $Companytb= new Companytb;
      $Companytb->email=$request->input('email');
      $Companytb->company=$request->input('name');
      $Companytb->country=$request->input('country');
      $Companytb->city=$request->input('city');
      $Companytb->block=$request->input('block');
      $Companytb->save();


    



      $business_profile= new business_profile;
      $business_profile->user_id=$request->input('userid');
      $business_profile->email=$request->input('email');
      $business_profile->description=$request->input('description');
      if($request->hasfile('business_image'))
        {
            $file=$request->file('business_image');
            $extention=$file->getClientOriginalExtension();
            $filename= $request->input('email').'.'.$extention;
            $file->move('uploads/image/',$filename);
            $business_profile->image=$filename;
        }
         $business_profile->save();

        return redirect()->back()->with('status','Business Profile Updated Successfully');

  
   }
}
