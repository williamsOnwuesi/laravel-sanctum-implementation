<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//-----------------------//
//-Importing Controllers-//
//-----------------------//

use App\Http\Controllers\APIAuthenticationController;
use App\Http\Controllers\MobileAppAuthController;
use App\Http\Controllers\SPAAuthController;

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


Route::post('/api-login', [APIAuthenticationController::class, 'login'])->name('api-login');

Route::post('/mobile-app-register', [MobileAppAuthController::class, 'register']);
Route::post('/mobile-app-login', [MobileAppAuthController::class, 'login'])->name('mobile-app-login');

Route::post('/spa-login', [SPAAuthController::class, 'login'])->name('spa-login');


//Sanctum protected routes

Route::post('/tokens', function () {return (['example' => 'true']);})->middleware('auth:sanctum', 'ability:view-tokens,edit-tokens');
// Route::post('/tokens', function () {return (['example' => 'true']);})->middleware('auth:sanctum', 'ability:view-tokens,edit-tokens');
