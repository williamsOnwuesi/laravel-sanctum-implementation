<?php

use Illuminate\Support\Facades\Route;

//-----------------------//
//-Importing Controllers-//
//-----------------------//

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('login', 'login')->name('login');
Route::view('register', 'register')->name('register');

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('dashboard/tokens', [DashboardController::class, 'view_tokens'])->name('tokens');

Route::post('dashboard/create_token', [DashboardController::class, 'create_token'])->name('create_token');
Route::post('login', [AuthenticationController::class, 'login']);
Route::post('register', [AuthenticationController::class, 'register']);



