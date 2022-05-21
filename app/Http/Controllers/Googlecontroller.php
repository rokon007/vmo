<?php

    

namespace App\Http\Controllers;

    

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Companytb;

    

class Googlecontroller extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function redirectToGoogle()

    {

        return Socialite::driver('google')->redirect();

    }

          

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function handleGoogleCallback()

    {
        $CompanyNameData=Companytb::All();
		$reviewfrom=3;

        try {

        

            $user = Socialite::driver('google')->user();
            
         

            $finduser = User::where('username', $user->id)->first();

        

            if($finduser){

         

                Auth::login($finduser);

        

                // return redirect()->intended('frontpage.socialreviews');
                return view('frontpage.socialreviews',compact('CompanyNameData','reviewfrom'));

         

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
                return view('frontpage.socialreviews',compact('CompanyNameData','reviewfrom'));

            }

        

        } catch (Exception $e) {

            dd($e->getMessage());

        }

    }

}