<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        return Socialite::driver('facebook')->redirect();

    }
	 public function handleInstagramCallback()

    {
        $CompanyNameData=Companytb::All();

        try {

        

            $user = Socialite::driver('facebook')->user();

         

            $finduser = User::where('username', $user->id)->first();

        

            if($finduser){

         

                Auth::login($finduser);

        

                // return redirect()->intended('frontpage.socialreviews');
                return view('frontpage.socialreviews',compact('CompanyNameData'));

         

            }else{

                $newUser = User::create([

                    'first_name' => $user->name,
                     'company_name' => $user->name,
                    'email' => $user->email,

                    'username'=> $user->id,

                    'password' => encrypt('123456dummy')

                ]);

        

                Auth::login($newUser);

        

                // return redirect()->intended('frontpage.socialreviews');
                return view('frontpage.socialreviews',compact('CompanyNameData'));

            }

        

        } catch (Exception $e) {

            dd($e->getMessage());

        }

    }
}
