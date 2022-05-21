<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Companytb;

class linkedincontroller extends Controller
{
    public function redirectTolinkedin()

    {

        return Socialite::driver('linkedin')->redirect();

    }
	 public function handlelinkedinCallback()

    {
        $CompanyNameData=Companytb::All();
		$reviewfrom=4;

        try {

        

            $user = Socialite::driver('linkedin')->user();

         

            $finduser = User::where('email', $user->id)->first();

        

            if($finduser){

         

               // Auth::login($finduser);

        

                // return redirect()->intended('frontpage.socialreviews');
                return view('frontpage.socialreviews1',compact('CompanyNameData','user'));

         

            }else{

                return view('frontpage.socialreviews1',compact('CompanyNameData','user','reviewfrom'));

            }

        

        } catch (Exception $e) {

            dd($e->getMessage());

        }

    }
}
