<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category', 'tags', 'user')->latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array|exists:tags,id',
            'image_url' => 'nullable|url|max:2048'
        ]);

        $post = Post::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image_url' => $request->image_url

        ]);

        $post->tags()->attach($request->tags);

        return redirect()->route('posts.index')->with('success', 'Post creado correctamente.');
    }

    public function show(Post $post)
    {
        $post->load('user', 'category', 'tags', 'likedByUsers');
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403);
        }

        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Request $request, Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array|exists:tags,id',
            'image_url' => 'nullable|url|max:2048'

        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'image_url' => $request->image_url
        ]);

        $post->tags()->sync($request->tags);

        return redirect()->route('posts.index')->with('success', 'Post actualizado.');
    }

    public function destroy(Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post eliminado.');
    }

    public function myPosts()
{
    $posts = Post::where('user_id', auth()->id())->latest()->paginate(10);
    return view('posts.my_posts', compact('posts'));
}
}
