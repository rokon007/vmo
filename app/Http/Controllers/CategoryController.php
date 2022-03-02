<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class CategoryController extends Controller
{
   public function index()
   {
    // 
   }
   public function create()
   {
    $Allcategories=Category::All();
    $categories=Category::whereNull('category_id')->get();
    $viewcategories=Category::where('status','1')->get();
    
     return view('admin.categories',compact('categories','Allcategories','viewcategories'));

   }
   public function store(Request $request)
   {
     $data = array(
        'name'=> $request->name,
        'category_id'=> $request->category_id,
      );
     $create=Category::create($data);
     return redirect()->route('categories.create');
   }   

    public function delete_category($id)
     {
      DB::delete('delete from categories where id=?',[$id]);
      return redirect()->route('categories.create')->with('success','Data deleted Successfully');
     }

   //--------------------------------------------------//

   public function FrontCategory()
   {
    $Allcategories=Category::All();
    $categories=Category::whereNull('category_id')->get();
    $viewcategories=Category::where('status','1')->get();

    $viewcategoriesgroup=Category::selectRaw('category_id,name')->get()
    ->groupBy('category_id');
    

         

    

        

    
       
     return view('frontpage.categories',compact('categories','Allcategories','viewcategories','viewcategoriesgroup'));
     
   }
}
