<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(9)
                ->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required|max:255',
            'thumbnail' => 'required|image',
            'slug' => 'required|max:255|unique:posts,slug',
            'excerpt' => 'required|max:255',
            'body' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');


        Post::create($attributes);

        return redirect('/posts');
    }
}
