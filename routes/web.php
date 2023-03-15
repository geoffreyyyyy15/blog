<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


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
});
Route::controller(SessionController::class)->group(function(){
    // User Logout
    Route::group(['middleware' => 'auth'], function() {
        Route::post('logout','destroy');
        Route::get('logout', 'destroy');
    });
    // Login Route
    Route::get('/', 'show')->middleware('guest');
    // Logging in
    Route::post('home', 'store');
    // Login Route
    Route::get('login',  'show')->middleware('guest')->name('login');
});
// Route::post('comment', [CommentsController::class, 'store']);

Route::post('post', [PostController::class, 'store'])->middleware();










