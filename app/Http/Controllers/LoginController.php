<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authentication(Request $request)
    {

    }

    public function logout()
    {
        Auth::logout();
        session()->regenerate();
        return redirect("/login");
    }

    public function facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
        $data = Socialite::driver('facebook')->stateless()->user();
        $user = User::where('fb_id', $data->user['id'])->first();
        if (!$user) {
            $user = User::create([
                'name' => $data->user['name'],
                'email' => $data->user['email'],
                'password' => bcrypt('Fb@' . $data->user['id']),
                'fb_id' => $data->user['id']
            ]);
        }
        Auth::login($user);
        return redirect()->route('home.index');
    }
}
