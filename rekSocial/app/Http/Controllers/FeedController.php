<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'category', 'tags', 'likes')
                     ->latest()
                     ->paginate(10);

        return view('feed.index', compact('posts'));
    }
}