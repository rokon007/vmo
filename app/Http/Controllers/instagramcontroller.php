<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Companytb;

class instagramcontroller extends Controller
{
    public function redirectToInstagram()

    {

        //return Socialite::driver('instagram')->redirect();
		return Socialite::driver('instagram')
    ->setScopes(['user_profile','user_media'])
    ->redirect();

    }
	 public function handleInstagramCallback()

    {
        $CompanyNameData=Companytb::All();

        try {

        

            $user = Socialite::driver('instagram')->user();

         

            $finduser = User::where('username', $user->id)->first();

        

            if($finduser){

         

              // Auth::login($finduser);

        

                // return redirect()->intended('frontpage.socialreviews');
                return view('frontpage.socialreviews1',compact('CompanyNameData','user'));

         

             }else{

                return view('frontpage.socialreviews1',compact('CompanyNameData','user'));

            }

        

        } catch (Exception $e) {

            dd($e->getMessage());

        }

    }
}
