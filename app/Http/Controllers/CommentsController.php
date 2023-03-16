<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
   public function store(Comments $comment)
   {
    // validation
    request()->validate([
        'body' => ['required']
    ]);
    $comment->create([
        'post_id' => request('post_id'),
        'user_id' => auth()->id(),
        'body' => request('body')
    ]);
    return back()->with('success', 'Comment Posted!');
   }
}
