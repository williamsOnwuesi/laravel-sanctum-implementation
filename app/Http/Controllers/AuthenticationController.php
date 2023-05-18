<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenticationController extends Controller
{
    function login (Request $request) {

        $credentials = $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required'] 
        ]);

        if(Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('dashboard');

        }

        return back()->withErorrs([
            'email' => 'The provided credentials do not match our records!.'
        ])->onlyInput('email');

    }


    function register (Request $request) {

        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('home');

    }
}
