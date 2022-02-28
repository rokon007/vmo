<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use DB;
use Mail;
use App\Http\Requests;
use Session;
Session_start();

class SliderController extends Controller
{

     public function slideradd()
     {
    // $this->AdminAuthCheck();
    return view('admin.slider');
    }


    public function slider_save(Request $request){

 //$this->AdminAuthCheck();
    $date = array();

    $date['slider_title'] = $request->slider_title;
    $date['slider_deteles'] = $request->slider_deteles;

    $image= $request->file('slider_photo');

    if($image){
        $image_name = str_random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_fullName = $image_name.'.'. $ext;
        $upload_path = 'image/';
        $image_url= $upload_path.$image_fullName;
        $secc=$image->move($upload_path,$image_fullName);
        if($secc){
            $date['slider_photo']= $image_url;

       DB::table('sliders')->insert($date);
       Session::put('massage','Slider Inserted Successfully ! . ');
       return Redirect::to('admin/slider');
        }
        
    }
  }

}
