<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // Tampilkan semua posting
    public function index()
    {
        $posts = Post::with(['author', 'category'])->get();
        return view('posts.index', compact('posts'));
    }

    // Form create
    public function create()
{
    $categories = Category::all();
    $authors = User::all();

    return view('posts.create', compact('categories', 'authors'));
}


    // Simpan data ke DB
    public function store(Request $request)
{
    $validated = $request->validate([
        'title'       => 'required',
        'excerpt'     => 'nullable',
        'body'        => 'required',
        'category_id' => 'required|exists:categories,id',
        'user_id'     => 'required|exists:users,id',
    ]);

    $validated['slug'] = Str::slug($validated['title']) . '-' . Str::random(6);

    Post::create($validated);

    return redirect()->route('posts.index')
                     ->with('success', 'Post berhasil disimpan');
}

}
