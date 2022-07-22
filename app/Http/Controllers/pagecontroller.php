<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Excel;
use App\Imports\UserImport;
use App\Models\reviews;
use DB;
use App\Models\Companytb;
use App\Models\User;
use App\Models\Category;
use App\Models\business_profile;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use File;
use Redirect;
use Auth;
use Share;
class pagecontroller extends Controller
{

    //--------------------------------------Companytb plans indexprofile indexsettings  info_funtion give/reviews  
     public function about()
    {
        $CompanyNameData=Companytb::All();
        return view('frontpage.about',compact('CompanyNameData'));
    }
	 function put_replay($id)
	 {
		 $rview=DB::table('reviews')
		  ->where('id',$id)->first();
		  return view('frontpage.putreplay',compact('rview'));
	 }
	
	  public function replay_save(Request $request,$id)
	 {
		 		
		   	 
		 
		 
		$replay = reviews::find($id);
        $replay->response = $request->input('response');       
        $replay->update();

		 // return view('frontpage.profile/$company',compact('rview'));
		 return back()->with('success','User Updated Successfully');
		
	 }
   
    
     public function plans()
    {
        $CompanyNameData=Companytb::All();
        return view('frontpage.plans',compact('CompanyNameData'));
    }

    public function terms_conditons()
    {
        $CompanyNameData=Companytb::All();
        return view('frontpage.terms_conditons',compact('CompanyNameData'));
    }

    public function privacy_policy()
    {
        $CompanyNameData=Companytb::All();
        return view('frontpage.privacy_policy',compact('CompanyNameData'));
    }
     
    public function contactus()
    {
        $CompanyNameData=Companytb::All();
        return view('frontpage.contactus',compact('CompanyNameData'));
    }
    //-------------------------

     public function businessprofile()
    {
          $Allcategories=Category::All();
    $categories=Category::whereNull('category_id')->get();
        $BprofileData=business_profile::All();
        return view('admin.bprofile',compact('BprofileData','Allcategories','categories'));
    }
   

   function indexprofile($company)
    {


          try {
			  $e=5;
       $CData = DB::table('companytbs')
	   ->join('business_profiles', 'companytbs.email', '=', 'business_profiles.email')
	   ->where('company',$company)->first();
	
     $RData = DB::table('companytbs')
            ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
             
               ->where('companytbs.company',[$company])
            ->select('companytbs.*','reviews.company_id as id','reviews.*','companytbs.id  as company_id')
            // ->get('reviews.created_at','desc')->limit(5);
            ->groupBy('reviews.id','companytbs.id','companytbs.email','companytbs.email','companytbs.company','companytbs.country','companytbs.city','companytbs.block','companytbs.contact','companytbs.category','companytbs.subcategory','companytbs.created_at','companytbs.updated_at','reviews.name','reviews.contact','reviews.purchaseditem','reviews.itemcounter','reviews.dateofpurchase','reviews.branchlocation','reviews.review','reviews.ratings','reviews.typeofpurchase','reviews.resolved','reviews.response','reviews.isresolved','reviews.whatsappreview','reviews.company_id','reviews.unlistedcompany','reviews.show','reviews.created_at','reviews.updated_at')
    ->orderBy('reviews.id', 'desc')
    ->get();
	
	   
	   
 $RDataX = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
            ->get();
 $reviewscount= Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
           ->count();
    $ratings = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
    ->sum('ratings');
	
	 $ratings1 = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
          ->where('companytbs.company',[$company])
        ->where('reviews.ratings','1')
    ->count();
	$ratings2 = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
        ->where('reviews.ratings','2')
    ->count();
	$ratings3 = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
        ->where('reviews.ratings','3')
    ->count();
	$ratings4 = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
           ->where('companytbs.company',[$company])
        ->where('reviews.ratings','4')
    ->count();
	$ratings5 = Companytb::join('reviews','companytbs.id','=','reviews.company_id')
             ->where('companytbs.company',[$company])
        ->where('reviews.ratings','5')
    ->count();
    } catch (ModelNotFoundException $exception) {
        return back()->withError($exception->getMessage())->withInput();
    }
    



// return $CData;
 
     return view('frontpage.profile',compact('CData','RData','reviewscount','ratings','ratings1','ratings2','ratings3','ratings4','ratings5'));
   }
   //review_display
   function review_display($rd)
    {


          try {
			 
	 $CData = DB::table('reviews')
            //->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
            ->join('companytbs', 'reviews.company_id', '=', 'companytbs.id')
			  ->join('business_profiles', 'companytbs.email', '=', 'business_profiles.email')
              // ->where('companytbs.company',[$company])
			  ->where('reviews.id',[$rd])
            ->select('business_profiles.description','companytbs.id','companytbs.email','companytbs.company','companytbs.country','companytbs.city','companytbs.block','companytbs.contact','companytbs.category','companytbs.subcategory','companytbs.created_at','companytbs.updated_at')
            
    ->first();
	$company=$CData->company;
     $RData = DB::table('reviews')
            //->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
            ->join('companytbs', 'reviews.company_id', '=', 'companytbs.id')
              // ->where('companytbs.company',[$company])
			  ->where('reviews.id',[$rd])
            ->select('companytbs.*','reviews.company_id as id','reviews.*','companytbs.id  as company_id')
            // ->get('reviews.created_at','desc')->limit(5);
            ->groupBy('reviews.id','companytbs.id','companytbs.email','companytbs.email','companytbs.company','companytbs.country','companytbs.city','companytbs.block','companytbs.contact','companytbs.category','companytbs.subcategory','companytbs.created_at','companytbs.updated_at','reviews.name','reviews.contact','reviews.purchaseditem','reviews.itemcounter','reviews.dateofpurchase','reviews.branchlocation','reviews.review','reviews.ratings','reviews.typeofpurchase','reviews.resolved','reviews.response','reviews.isresolved','reviews.whatsappreview','reviews.company_id','reviews.unlistedcompany','reviews.show','reviews.created_at','reviews.updated_at')
    ->orderBy('reviews.id', 'desc')
    ->get();
	
	   
	 $socialShare=Share::page("https://vimbiso.org/review_display/$rd","$company")
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram()
        ->getRawLinks();		
 
 
  
	
	
	
	
	
    } catch (ModelNotFoundException $exception) {
        return back()->withError($exception->getMessage())->withInput();
    }
    



// return $CData;
 
     return view('frontpage.share.review_display',compact('RData','CData','socialShare'));
   }
   
   
    function indexupdate_profile($email)
	{
		
		$CompanyData= Companytb::where('companytbs.email',$email)->first();
		               
                       
		$profile= DB::table('business_profiles')
                  ->where('email',$email)
                       ->first();
					   
		$Allcategories=Category::All();
        $categories=Category::whereNull('category_id')->get();
		$CompanyNameData=Companytb::All();

		
     if($CompanyData=== null)
     {
		  return view('frontpage.settings',compact('CompanyNameData'));
	 }	
    else
	{
		return view('frontpage.UpdateProfile',compact('CompanyData','profile','Allcategories','categories'));
	}		
             
              
            
    
	}

     public function indexsettings()
    {
        $CompanyNameData=Companytb::All();
        return view('frontpage.settings',compact('CompanyNameData'));
    }

    //------------------------
    //**************************************************************************************************************************************************************************************



    public function setcompany()
    {
        $UserData=Companytb::All();
        return view('admin.setcompany',compact('UserData'));
    }
    function usercompany($id)
    {
        $Allcategories=Category::All();
        $categories=Category::whereNull('category_id')->get();
        $CompanyData=Companytb::find($id);
    return view('admin.companybelong',['CompanyData' => $CompanyData,'Allcategories'=> $Allcategories,'categories'=> $categories ]);
    }

   function SetUser($id)
   {
     $Allcategories=Category::All();
    $categories=Category::whereNull('category_id')->get();

       $UserData = DB::table('users')
     ->join('business_profiles', 'users.email', '=', 'business_profiles.email')
                 ->where('users.id',[$id])
                 ->first();
    return view('admin.userset',['UserData' => $UserData,'Allcategories'=> $Allcategories,'categories'=> $categories ]);
   }
   //company edit route
   function editcompany(string $email)
   {
     $Allcategories=Category::All();
    $categories=Category::whereNull('category_id')->get();

       $CompanyData = DB::table('companytbs')
     ->join('business_profiles', 'companytbs.email', '=', 'business_profiles.email')
                 ->where('companytbs.email',[$email])
                 ->first();
    return view('admin.company_edit',['CompanyData' => $CompanyData,'Allcategories'=> $Allcategories,'categories'=> $categories ]);
   }
   //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
   //USER company        
            public function updatecompany_funtion(Request $request,string $email)
          {
   
               
               $company = $request->input('company');
               $country = $request->input('country');
			   $city = $request->input('city');
               $block = $request->input('block');
               $contact = $request->input('contact');
			   $category = $request->input('category');  
               $subcategory = $request->input('subcategory'); 			   
        DB::update('update companytbs set company=?,country=?,city=?,block=?,contact=?,category=?,subcategory=? where email = ?',[$company,$country,$city,$block,$contact,$category,$subcategory,$email]);
		


            $profile=DB::table('business_profiles')->where('email',$email)->first();
               $description = $request->input('description');
               $category = $request->input('category');
              
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
                              
              DB::update('update business_profiles set description = ?,category=? where email = ?',[$description,$category,$email]);                           
       
         return redirect()->route('admin-user')->with('success','User Updated Successfully');
            }
   //XXXXXXXXXXXXXXXXXXXXXXXXX
   
   
   
   
   
   

   public function adminlogin()
   {
      return view('admin.adminlogin');
   }

  
    public function pagesetting()
   {
      return view('admin.pagesetting');
   }
    public function categories()
   {
      return view('admin.categories');
   }
   

  

   public function Reviews()
   {
      return view('admin.reviews');
   }

   // COMPANY UPDATE
     // public function show($id)
     //  {
     //  $users = DB::select('select * from companytbs where id = ?',[$id]);
     //  return view('stud_update',['users'=>$users]);
     //   }
       // info_funtion
	    public function info_funtion($id)
          
			 {
    	$info = Companytb::find($id);
		$company=$info->company;
        $email=$info->email;
		$contact=$info->contact;
	   return back()->with('email',( $email) );
    }
	 public function info_contact($id)
          
			 {
    	$info = Companytb::find($id);
		$company=$info->company;
        $email=$info->email;
		$contact=$info->contact;
	   return back()->with('contact',( $email) );
    }
	   
         public function companyedit(Request $request, $cid)
          {
            $category = $request->input('category');
            $subcategory = $request->input('subcategory');
        DB::update('update companytbs set category = ?,subcategory=? where id = ?',[$category,$subcategory,$cid]);
          return redirect()->route('admin.company_set')->with('success','Record updated successfully');
        
            }
    //USER UPDATE  editcompany      
            public function updateuser_funtion(Request $request,string $email)
          {
   
               $username = $request->input('username');
               $first_name = $request->input('first_name');
               $last_name = $request->input('last_name');
               
      if($request->has('is_active')){
          $is_active = 1;
          
        }else{
            $is_active = 0;
           
        }
        if($request->has('is_staff')){
          $is_staff =1;
          
        }else{
           $is_staff = 0;
         
        }
         if($request->has('is_superuser')){
         $is_superuser =1;
         
        }else{
             $is_superuser = 0;
         
        }

     
        DB::update('update users set username = ?,first_name=?,last_name=?,is_active=?,is_staff=?,is_superuser=? where email = ?',[$username,$first_name,$last_name,$is_active,$is_staff,$is_superuser,$email]);


            $profile=DB::table('business_profiles')->where('email',$email)->first();
               $description = $request->input('description');
               $category = $request->input('category');
               $tags = $request->input('tags');
                $status = $request->input('status');
               if($request->has('verified'))
                                      {
                                    $verified =1;
                                       }
                                       else
                                       {
                                         $verified = 0;
                                        }

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
                              
              DB::update('update business_profiles set description = ?,category=?,tags=?,status=?,verified=? where email = ?',[$description,$category,$tags,$status,$verified,$email]);                           
       
         return redirect()->route('admin-user')->with('success','User Updated Successfully');
            }

   // REVIEW SAVE 

public function give(Request $request)
   {
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
	  $reviews->whatsappreview=$request->input('reviewfrom');
      $reviews->save();

       $company=Companytb::where('id',[$request->input('company_id')])->first();
        $deatils=[
         'title'=>$request->input('name'),
         'body'=>$request->input('review'),
         'company'=>$company->company,
         'ratings'=>$request->input('ratings')
        ];
		 $RV= DB::table('reviews')
		 ->orderBy('reviews.id', 'desc')
		 ->limit(1)->first();
		 $RVID=$RV->id;
		 $Show=1;
		 $socialShare=Share::page("https://vimbiso.org/review_display/$RVID","$company->company")
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram()
        ->getRawLinks();
      
	 Mail::to("info@vimbiso.org")->cc($company->email)->send(new TestMail($deatils));
		
       
    
     //return redirect()->route('welcome')->with('success','Review aded Successfully');
	 
	 return redirect()->route('welcome')->with(['socialShare' => $socialShare,'Show' => $Show]);
   }
  

}
