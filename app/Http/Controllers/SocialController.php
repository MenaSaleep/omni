<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;




class SocialController extends Controller {
    
    
    function redirect() {
        return Socialite::driver('google')->redirect();

    }

    function callback() {
         //Socialite::driver('google')->user();
        return $user = Socialite::driver('google')->stateless()->user();

    }
}
