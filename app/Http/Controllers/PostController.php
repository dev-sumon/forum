<?php

namespace App\Http\Controllers;

use App\Models\Categroy;
use App\Models\Comment;
use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::withCount([
            'comments' => function ($query) {
                $query->whereNull('parent_id');
            }
        ])->latest()->get()->map(function ($post) {
            $post->short_title = Str::limit($post->title, 45);
            $post->short_desc = Str::limit($post->desc, 100);
            return $post;
        });
        $data['categories'] = Categroy::latest()->get();
        $data['posts'] = $posts;
        return view('post.index', $data);
    }

    public function create()
    {
        $data['category'] = Categroy::latest()->get();
        return view('post.create', $data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:posts,slug',
            'category_id' => 'required|exists:categroys,id',
            'desc' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $request->name . time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs("post/", $filename, 'public');
        }

        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'desc' => $request->desc,
            'image' => $path,
            'user_id' => Auth::id(),
        ]);


        return redirect()->route('posts.index');
    }

    public function single($slug)
    {
        $data['post'] = Post::withCount([
            'comments' => function ($q) {
                $q->whereNull('parent_slug');
            }
        ])->where('slug', $slug)->firstOrFail();

        $data['category'] = Categroy::latest()->get();

        return view('post.single', $data);
    }
    public function comment($slug)
    {
        $data['post'] = Post::where('slug', $slug)->firstOrFail();
        $data['comments'] = Comment::where('post_slug', $data['post']->slug)
            ->whereNull('parent_id')
            ->with('replies')
            ->latest()
            ->get();

        return view('post.comment', $data);
    }
}
