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

        try {

        

            $user = Socialite::driver('linkedin')->user();

         

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
