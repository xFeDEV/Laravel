<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Aseguramos que solo usuarios autenticados puedan dar like
    }

    public function like(Post $post)
    {
        if (!$post->likedBy(Auth::user())) {
            $post->likes()->create(['user_id' => Auth::id()]);
        }
        return back(); // Redirigimos a la página anterior
    }

    public function unlike(Post $post)
    {
        $post->likes()->where('user_id', Auth::id())->delete();
        return back(); // Redirigimos a la página anterior
    }
}