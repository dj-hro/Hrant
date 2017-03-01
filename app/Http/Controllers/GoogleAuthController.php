<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use App\User;

class GoogleAuthController extends Controller
{  
    
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {


        return Socialite::driver('google')->redirect();
    }



    public function handleProviderCallback(Request $request)
    {
        
            try {
                $guser =  Socialite::driver('google')->user();
                } 
            catch (Exception $e) {
                return redirect()->to('home');
            }

      
            dd($guser);

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
                Auth::loginUsingid($saimeuser->$id);
                return redirect()->to('home');
            }
            else{
                
                User::create([
                            'facebook_id' => $id,
                            'name' => $name,
                            'email' => $email,
                            'avatar' => $avatar
                            ]);

                $faisuser = User::where('facebook_id', '=', $id)->first();

                Auth::loginUsingid($faisuser->$id);
                return redirect()->to('home');
            }

        }

        

    }



    
        
}
