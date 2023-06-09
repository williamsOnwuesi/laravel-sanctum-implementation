<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SPAAuthController extends Controller
{
    function login (Request $request) {

        $credentials = $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required'] 
        ]);

        if(Auth::attempt($credentials)) {

            return (['message' => 'User succesfully authenticated!.']);

        }

        return (['error' => 'Sorry!, Your credentials do not match our records!.']);

    }
}
