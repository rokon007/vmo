<?php

    

namespace App\Http\Controllers;

    

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Companytb;

    

class FacebookController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function redirectToFacebook()

    {

        return Socialite::driver('facebook')->redirect();

    }
	
	public function redirectToInstagram()

    {

        return Socialite::driver('instagram')->redirect();

    }

          

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function handleFacebookCallback()

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
	
	 public function handleInstagramCallback()

    {
        $CompanyNameData=Companytb::All();

        try {

        

            $user = Socialite::driver('instagram')->user();

         

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