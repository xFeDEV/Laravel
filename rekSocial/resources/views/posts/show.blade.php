@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>feed</h1>
@stop

@foreach($posts as $post)
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ $post->user->name }}</strong> - {{ $post->category->name }}
        </div>
        <div class="card-body">
            <h5>{{ $post->title }}</h5>
            <p>{{ $post->content }}</p>
            <div>
                @foreach($post->tags as $tag)
                    <span class="badge bg-primary">#{{ $tag->name }}</span>
                @endforeach
            </div>
        </div>
        <div class="card-footer text-muted">
            {{ $post->created_at->diffForHumans() }}
        </div>
    </div>
@endforeach
