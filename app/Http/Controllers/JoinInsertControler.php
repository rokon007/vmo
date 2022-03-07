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
       $Companysdata = array(
        'company'=> $request->name,
        'country'=> $request->country,
         'city'=> $request->city,
        'block'=> $request->block,
      );
     $create=Companytb::create($Companysdata);


     // $data=User::find($request->input('email')->email);
                 
     //              $data->country==$request->input('country');
     //              $data->city==$request->input('city');
     //              $data->block==$request->input('block');
     //              $data->save();
       



      $business_profile= new business_profile;
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
