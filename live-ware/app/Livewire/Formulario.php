<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Livewire\Attributes\Rule;

class Formulario extends Component
{
    public $categories, $tags;

    public $selectedTags = [];

    public $postCreate = [
        'title' => '',
        'content' => '',
        'category_id' => '',
        'tags' => []
    ];

    public $posts;

    public $postEditId = '';

    public $postEdit = [
        'category_id' => '',
        'title' => '',
        'content' => '',
        'tags' => []
    ];

    public $open = false;

    public function mount(){
        $this->categories = Category::all();
        $this->tags = Tag::all();
        $this->posts = Post::all();
    }

    public function save()
{
    $validated = $this->validate([
        'postCreate.title' => 'required|string',
        'postCreate.content' => 'required|string',
        'postCreate.category_id' => 'required|exists:categories,id',
        'selectedTags' => 'array',
    ]);

    $post = Post::create([
        'title' => $this->postCreate['title'],
        'content' => $this->postCreate['content'],
        'category_id' => $this->postCreate['category_id'],
    ]);

    $post->tags()->attach($this->selectedTags);

    $this->reset('postCreate', 'selectedTags');
    $this->posts = Post::all();
}

public function edit($postId)
{
    $this->postEditId = $postId;

    $post = Post::with('tags')->find($postId);

    $this->postEdit = [
        'title' => $post->title,
        'content' => $post->content,
        'category_id' => $post->category_id,
        'tags' => $post->tags->pluck('id')->toArray(),
    ];

    $this->open = true;
}


    public function update(){
        $post = Post::find($this->postEditId);

        $post->update([
            'category_id' => $this->postEdit['category_id'],
            'title' => $this->postEdit['title'],
            'content' => $this->postEdit['content'],
        ]);
        $post->tags()->sync($this->postEdit['tags']);
        $this->reset(['postEditId', 'postEdit', 'open']);
        $this->posts = Post::all();
    }

    public function destroy($postId){
        $post = Post::find($postId);
        $post->delete();
        $this->posts = Post::all();
    }

    public function render()
    {
        return view('livewire.formulario');
    }
}