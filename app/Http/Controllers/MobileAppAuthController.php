<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class MobileAppAuthController extends Controller
{
    //Registration Implementation

    function register (Request $request) {

        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'tokenName' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return $user->createToken($request->TokenName)->plainTextToken();

    }


    //Login Implementation

    function login (Request $request) {

        $credentials = $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required'], 
            'tokenName' => ['required']
        ]);

        if(Auth::attempt($credentials)) {

            return $request->user()->createToken($request->tokenName())->plainTextToken;

        }

        return (['error' => 'The credentials you provided do not match our records!.']);

    }

}
