<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

       
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
     public function login()
    {
        return view('login');
    }

    public function adminIndex()
    {
        $usercount=DB::table('vimbiso_users')->count();
         $categoriescount=DB::table('categories')->count();
         $reviewscount=DB::table('reviews')->count();
        return view('admin.adminhome',compact('usercount','categoriescount','reviewscount'));
    }
    
}
