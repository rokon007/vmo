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

            $reviewfrom=2;

            $finduser = User::where('username', $user->id)->first();

        

            if($finduser){

         

              //  Auth::login($finduser);

        

               
              //  return view('frontpage.socialreviews',compact('CompanyNameData'));
			   return view('frontpage.socialreviews1',compact('CompanyNameData','user','reviewfrom'));

         

            }else{

              //  $newUser = User::create([

                //    'first_name' => $user->name,
                //     'company_name' => $user->name,
                //    'email' => $user->email,

                //    'username'=> $user->id,

               //     'password' => encrypt('123456dummy')

              //  ]);

        

             //   Auth::login($newUser);

        

                
                //return view('frontpage.socialreviews',compact('CompanyNameData'));
				 return view('frontpage.socialreviews1',compact('CompanyNameData','user'));

            }

        

        } catch (Exception $e) {

            dd($e->getMessage());

        }

    }
	
	

}