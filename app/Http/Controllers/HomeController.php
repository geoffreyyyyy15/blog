<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index')
            ->with('users', Post::with('author')->get());
    }

    public function show() {
        return view('home.posts')
            ->with('users', Post::with('author')
            ->where('user_id', auth()->id())->get());
    }

}
