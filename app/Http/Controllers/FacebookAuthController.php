<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use App\User;

class FacebookAuthController extends Controller
{  
    
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {


        return Socialite::driver('facebook')->redirect();
    }



    public function handleProviderCallback(Request $request)
    {
        
            try {
                $fuser =  Socialite::driver('facebook')->user();
                } 
            catch (Exception $e) {
                return redirect()->to('home');
            }

      


        //     // OAuth Two Providers
        // $token = $user->token;
        // $refreshToken = $user->refreshToken; // not always provided
        // $expiresIn = $user->expiresIn;

        // // OAuth One Providers
        // $token = $user->token;
        // $tokenSecret = $user->tokenSecret;

        // All Providers

        $id = $fuser->getId();       
        $name = $fuser->getName();
        $email = $fuser->getEmail();
        $avatar = $fuser->getAvatar();        


        $user = User::where('facebook_id', '=', $id)->first();




        if($user){

            Auth::loginUsingid($user->id);
            return redirect()->to('home');

        }
        else{
            
            $saimeuser = User::where('email','=', $email)->first();

            if($saimeuser){

                
                User::where('email','=', $email)->update([
                            'facebook_id' => $id,
                            'avatar' => $avatar
                            ]);
                
            }
       
            else{
                
                User::create([
                            'facebook_id' => $id,
                            'name' => $name,
                            'email' => $email,
                            'avatar' => $avatar
                            ]);

                
            }


            $user = User::where('facebook_id', '=', $id)->first();
            if($user){

            Auth::loginUsingid($user->id);
            return redirect()->to('home');

        }
        }

        

    }



    
        
}
