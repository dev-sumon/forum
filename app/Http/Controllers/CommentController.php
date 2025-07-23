<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function show($id)
    {
        $data['post'] = Post::findOrFail($id);
        $data['comments'] = Post::with([
            'comments' => function ($q) {
                $q->whereNull('parent_id')->with('replies.user', 'user');
            }
        ])->findOrFail($id);
        return view('post.comment', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required|string',
            'post_slug' => 'required|exists:posts,slug',
        ]);
        Comment::create([
            'title' => $request->title,
            'email' => $request->email,
            'comment' => $request->comment,
            'post_slug' => $request->post_slug,
            'parent_id' => $request->parent_id,
        ]);

        return back();
    }

}
