<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\AbstractUser;

class SocialLoginController extends Controller
{
    public function redirect($service, Request $request)
    {
        return Socialite::driver($service)->redirect();
    }

    public function callback($service, Request $request)
    {
        /** @var AbstractUser $serviceUser */
        $serviceUser = Socialite::driver($service)->user();
        dd($serviceUser->getName());
    }
}
