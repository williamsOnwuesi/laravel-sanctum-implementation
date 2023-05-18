<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard (Request $request) {
        return view('dashboard', ['user' => $request->user()]);
    }


    function view_tokens (Request $request) {
        return (['token' => $request->user()->tokens]);
    }


    function create_token (Request $request) {

        $token = $request->user()->createToken($request->user()->email.$request->token_name);

        return (['token' => $token->plainTextToken]);

    }

    function revoke_token (Request $request) {
        return (['token' => $request->user()->tokens]);
    }


    function revoke_tokens (Request $request) {
        return (['token' => $request->user()->tokens]);
    }
}
