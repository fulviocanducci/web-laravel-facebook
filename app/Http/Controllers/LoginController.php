<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index()
    {

    }

    public function authentication(Request $request)
    {

    }

    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        return response()->json($user);
    }
}
