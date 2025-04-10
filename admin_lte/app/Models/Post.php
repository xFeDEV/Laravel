<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function likedByUsers() {
        return $this->belongsToMany(User::class, 'likes')->withTimestamps();
    }
    
    public function isLikedBy(User $user) {
        return $this->likedByUsers->contains($user);
    }
    
    
}
