<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class LikeController extends Controller
{
    public function toggle(Request $request, Post $post)
{
    $user = auth()->user();

    $like = $post->likes()->where('user_id', $user->id)->first();

    if ($like) {
        $like->delete();
        return response()->json(['liked' => false]);
    } else {
        $post->likes()->create(['user_id' => $user->id]);
        return response()->json(['liked' => true]);
    }
}

}
