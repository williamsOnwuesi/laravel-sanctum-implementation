<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class APIAuthenticationController extends Controller
{
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
