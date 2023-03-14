<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index')
                ->with('users', Post::latest()->paginate(5));
    }
    public function show() {
        return view('home.posts')
                ->with('users',Post::latest()
                ->where('user_id', auth()->id())
                ->latest()->paginate(5))->with('message', 'message');
    }
    public function destroy(Post $post) {
       $post->delete();
       return back()->with('success', 'Post Successfully Deleted');
    }
    public function edit(Post $post){
        return view('home.edit')->with('post', $post);
    }
    public function update(Post $post) {
        $attributes = request()->validate([
            'body' => ['required']
        ]);

        $post->update($attributes);

        return redirect('/posts')->with('success', 'Post Successfully Updated');

    }

}
