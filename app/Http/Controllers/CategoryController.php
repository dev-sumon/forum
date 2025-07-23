<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Categroy;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data['categories'] = Categroy::latest()->get();
        return view('categroy.index', $data);
    }
    public function create()
    {
        return view('categroy.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'slug' => 'required|string|unique:categroys,slug',
        ]);

        Categroy::create([
            'title' => $request->title,
            'slug' => $request->slug,

        ]);
        return redirect()->route('categroy.index');
    }
    public function post($slug)
    {
        $data['category'] = Categroy::with([
            'posts' => function ($query) {
                $query->withCount([
                    'comments' => function ($q) {
                        $q->whereNull('parent_slug');
                    }
                ]);
            }
        ])->where('slug', $slug)->firstOrFail();

        return view('post.category_forum', $data);
    }
}
