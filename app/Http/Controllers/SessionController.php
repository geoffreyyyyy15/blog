<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function show() {
        return view('session.login');
    }

    public function destroy() {
        auth()->logout();

        return redirect('/login');
    }

    public function store() {
       $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(! auth()->attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'Your Provided credentials could not validate']);
        }
        session()->regenerate();
        return redirect('/home')->with('success', 'You are now Logged in');
    }
}
