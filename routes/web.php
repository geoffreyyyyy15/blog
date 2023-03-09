<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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

// Login Route
Route::get('/login', [SessionController::class, 'show'])->middleware('guest')->name('login');

// Creating User Route
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

// Home Page redirect
Route::get('home', [HomeController::class, 'index'])->middleware('auth');

// User Logout
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');

// Logging in
Route::post('home', [SessionController::class, 'store']);






