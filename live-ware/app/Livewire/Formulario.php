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

    public function save(){

        $post=Post::create(
            $this->only('category_id','title','content')
        );

        $post->tags()->attach($this->selectedTags);

        $this->reset(['category_id','title','content', 'selectedTags']);
        $this->posts = Post::all();

    }

    public function edit($postId)
    {
     
        $this->open = true;

        $this->postEditId = $postId;

        $post = Post::find($postId);

        $this->postEdit['category_id'] = $post->category_id;
        $this->postEdit['title'] = $post->title;
        $this->postEdit['content'] = $post->content;

        $this->postEdit['tags'] = $post->tags->plunck('id')->toArray();

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