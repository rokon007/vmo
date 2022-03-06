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

  function index()
  {
    $joindata=User::join('business_profiles','email','=','users.email')
                       ->join('users.company_name','=','reviews.company')
                       ->get(['companytbs.company','companytbs.country','companytbs.city','companytbs.block','companytbs.contact','companytbs.subcategory',
                        'companytbs.category','reviews.ratings','reviews.resolved','reviews.isresolved','business_profiles.email','business_profiles.verified','business_profiles.tags','business_profiles.status','business_profiles.image']);

     return view('frontpage.viewcompanies',compact('joindata'));
  }
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
     $data = array(
        'company'=> $request->company,
        'country'=> $request->country,
        'city'=> $request->city,
        'block'=> $request->block,
        'contact'=> $request->contact,
        'category'=> $request->category,
        'subcategory'=> $request->subcategory,
        
      );
     $create=Companytb::create($data);
     return redirect()->route('admin.companies');
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
}
