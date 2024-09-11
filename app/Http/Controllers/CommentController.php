<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $comment = new Comment($validatedData);
        $comment->user_id = auth()->id();
        $comment->post_id = $post->id;
        $comment->save();

        return back()->with('success', 'Your comment has been posted successfully.');
    }

    public function destroy(Comment $comment)
    {
        if (auth()->id() !== $comment->user_id && !auth()->user()->isAdmin()) {
            abort(403);
        }

        $comment->delete();
        return back()->with('success', 'Comment deleted successfully.');
    }
}
