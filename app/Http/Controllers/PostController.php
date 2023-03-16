<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Post $post) {
        request()->validate([
            'body' => ['required']
        ]);

        $post->create([
        'user_id' => auth()->id(),
        'body' => request('body')]);
        return back()->with('success', 'Posted!');
    }
}
