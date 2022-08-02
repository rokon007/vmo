<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\business_profile;
use DB;
use App\Models\Companytb;
use App\Models\User;
use File;

class JoinInsertControler extends Controller
{
	public function register_1stpage(Request $request){
		if($request->email){
			
			$CompanyCount=Companytb::where('email',$request->email)->count();
			if($CompanyCount>0){
				 $UserCount=User::where('email',$request->email)->count();
				if($UserCount>0){
					 return back()->with('erorr','You have already subscribed');
				}else{
					 $email=$request->input('email');
                     $CompanyData = Companytb::where('email',$email)->first();
					
		             $company=$CompanyData->company;
		             $block=$CompanyData->block;
					 return view('auth.register',compact('email','company','block')); 
				}
			}else{
				//Companytb Saverecord
				$Companytb= new Companytb;
                $Companytb->email=$request->input('email');
                $Companytb->company=$request->input('name');
                $Companytb->country=$request->input('country');
                $Companytb->city=$request->input('city');
                $Companytb->block=$request->input('block');
                $Companytb->save();
				
				
				//business_profile Saverecord
                $business_profile= new business_profile;
                $business_profile->user_id=$request->input('userid');
                $business_profile->email=$request->input('email');
                $business_profile->description=$request->input('description');
                if($request->hasfile('business_image')){
                      $file=$request->file('business_image');
                      $extention=$file->getClientOriginalExtension();
                      $filename= $request->input('email').'.'.$extention;
                      $file->move('uploads/image/',$filename);
                      $business_profile->image=$filename;
                         }
              $business_profile->save();
	          $email=$request->input('email');
		      $company=$request->input('name');
		      $block=$request->input('block');
              return view('auth.register',compact('email','company','block')); 
             }
	   }
	}
   
	   



      

      
	   
			
	public function Saverecord(Request $request){
	
      $email=$request->input('email');
      $Company = Companytb::where('email',$email)->first();
if ($Company === null) {
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
		 $email=$request->input('email');
		 $company=$request->input('name');
		 $block=$request->input('block');

       // return redirect()->back()->with('status','Business Profile Updated Successfully');
	   return view('auth.register',compact('email','company','block')); 
}
else{
       // $Companytb = Student::find($id);
        $Companytb = Companytb::where('email', $email)->first();
        $Companytb->company=$request->input('name');
        $Companytb->country=$request->input('country');
        $Companytb->city=$request->input('city');
        $Companytb->block=$request->input('block');
		  $Companytb->category= $request->input('category');
			  $Companytb->subcategory= $request->input('subcategory');
        $Companytb->update();



         $profile=DB::table('business_profiles')->where('email', $email)->first();
               $description = $request->input('description');
              
              
         if($request->hasfile('business_image'))         
        {
           $destination = 'uploads/image/'.$profile->image;
   if(File::exists($destination))
   {
     File::delete($destination);   
   }
            $file=$request->file('business_image');
            $extention=$file->getClientOriginalExtension();
            $filename= $request->input('email').'.'.$extention;
            $file->move('uploads/image/',$filename);
            // $profile->image=$filename;
        }
                              
              DB::update('update business_profiles set description = ? where email = ?',[$description,$email]); 

              return redirect()->back()->with('success','Business Profile Updated Successfully');
       
}


      

  
   }
   
   //view_register
    public function view_register()
	{
		 return view('auth.settings'); 
	}
}
