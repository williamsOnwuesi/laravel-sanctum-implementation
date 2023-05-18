<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//-----------------------//
//-Importing Controllers-//
//-----------------------//

use App\Http\Controllers\APIAuthenticationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [APIAuthenticationController::class, 'login'])->name('login');
