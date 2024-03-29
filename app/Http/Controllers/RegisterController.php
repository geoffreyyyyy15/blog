<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }
    public function store() {

       $attirbutes = request()->validate([
            'name' => ['required', 'min:1', 'max:255'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'username' => ['required', 'min:4', 'max:255', Rule::unique('users', 'username')],
            'password' => ['required', 'min:7']
        ]);

        $user = User::create($attirbutes);

        auth()->login($user);

        return redirect('/home')->with('success', 'You have successfully Created an Account');

    }
}
