<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CompanyExport;
use App\Imports\CompanyImport;
use Excel;
use App\Models\Companytb;
use App\Models\Category;

class CompanyController extends Controller
{
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
         $subcste=DB::table('categories')->where('category_id',$cid)->get();
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
    
      return view('admin.companies',compact('CompanyData','categories'));


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
