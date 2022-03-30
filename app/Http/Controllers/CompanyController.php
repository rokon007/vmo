<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CompanyExport;
use App\Imports\CompanyImport;
use Excel;
use App\Models\User;
use App\Models\Companytb;
use App\Models\reviews;
use App\Models\business_profile;
use App\Models\Category;
use DB;

class CompanyController extends Controller
{
  
  // function index()
  // {
  //   $CompanyNameData=Companytb::All();
  //   $joindata = DB::table('users')
  //           ->join('business_profiles', 'users.id', '=', 'business_profiles.user_id')
  //             ->join('companytbs', 'users.email', '=', 'companytbs.email')
  //              ->join('reviews', 'companytbs.id', '=', 'reviews.company_id')
  //           ->select('users.*', 'business_profiles.user_id as id', 'business_profiles.*','users.id as user_id','companytbs.*','users.email as email','reviews.*','companytbs.id  as company_id')
  //           ->get();





  //     return view('frontpage.viewcompanies',compact('joindata','CompanyNameData'));
  // }
    public function companyshow()
   {
    



    //admin
      $CompanyData=Companytb::All();
       $CompanyNameData=Companytb::All();
     return view('frontpage.viewcompanies',compact('CompanyData','CompanyNameData'));      
   }

    public function getSubcate(Request $request)
   { 
         $cid=$request->post('cid');
          //$subcste=companytb::where('subcategory',[$cid])->get();
        $subcste=DB::table('categories')->where('subcategory',$cid)->get();
         $html='<option value="">Select Subcatagory</option>';
         foreach($subcste as $list){
          $html='<option value="'.$list->name.'">'.$list->name.'</option>';
          echo $html;
         }
   }
   public function admincompanyshow()
   {
    //admin
      $CompanyData=Companytb::All();
      $categories=Category::whereNull('category_id')->get();
       $Allcategories=Category::All();
    
      return view('admin.companies',compact('CompanyData','categories','Allcategories'));


   }
   public function store(Request $request)
   {
    
    $Companytb= new Companytb;
      $Companytb->email=$request->input('email');
      $Companytb->company=$request->input('company');
      $Companytb->country=$request->input('country');
      $Companytb->city=$request->input('city');
      $Companytb->block=$request->input('block');
      $Companytb->contact=$request->input('contact');
      $Companytb->category=$request->input('category');
      $Companytb->subcategory=$request->input('subcategory');
      $Companytb->save();


      
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


     return redirect()->route('admin.companies')->with('success','Company added successfully');
   }

   public function exportCompany()
    {
        return Excel::download(new CompanyExport,'users.xlsx');

    }
    public function importCompany(Request $request)
    {
      // $this->validate($request,['select_file' =>'required|mimes:xls,xlsx']);
     
       Excel::import(new CompanyImport,$request->file('file'));
      
       return back()->with('success','Excel Data Imported successfully');
    }

    public function index()
    {
       $CompanyNameData=Companytb::All();
      $joindata=Companytb::All();
          return view('frontpage.viewcompanies',compact('joindata','CompanyNameData'));
    } 
}
