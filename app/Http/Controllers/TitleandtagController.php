<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use Mail;
use App\Http\Requests;
//use Session;
//Session_start();

class TitleandtagController extends Controller
{
    public function titleandtag()
    {
   // $title=TitetleAndTag::All();
    $title = DB::table('titetle_and_tags')
            ->first();

     return view('admin.title')->with('title',$title);         
   }



   public function save_title(Request $request){
 //$this->AdminAuthCheck();
    $date = array();
    $date['title'] = $request->title;
    $date['tags'] = $request->tags;
    $date['deteles'] = $request->deteles;

  DB::table('titetle_and_tags')->update($date); 

  //Session::put('massage','Update Website Title And Tags');
  return Redirect::to('/admin/title');

   
   }



}
