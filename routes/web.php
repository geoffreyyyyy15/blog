<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
Route::get('/', [SessionController::class, 'show'])->middleware('guest');

// Creating User Route
Route::get('/', function() {
    return view('welcome');
})->middleware('guest');
Route::controller(RegisterController::class)->group(function() {
    Route::get('register', 'create')->middleware('guest');
    Route::post('register', 'store')->middleware('guest');
});
// Home Page redirect
Route::controller(HomeController::class)->group(function() {
    Route::get('home', 'index')->middleware('auth');
    Route::get('posts', 'show')->middleware('auth');
});

Route::controller(SessionController::class)->group(function(){
    // User Logout
    Route::post('logout','destroy')->middleware('auth');
    Route::get('logout', 'destroy')->middleware('auth');
    // Logging in
    Route::post('home', 'store');
    // Login Route
    Route::get('login',  'show')->middleware('guest')->name('login');
});
// Route::post('comment', [CommentsController::class, 'store']);

Route::post('post', [PostController::class, 'store']);










