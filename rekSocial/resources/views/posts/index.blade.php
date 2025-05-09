@extends('adminlte::page')

@section('title', 'Feed de Publicaciones')

@section('content_header')
    <h1>Feed de Publicaciones</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            @forelse ($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h5>
                        <p class="card-text">{{ Str::limit($post->content, 200) }}</p>

                        @if ($post->image_url)
                            <img src="{{ $post->image_url }}" class="img-fluid mb-2 rounded" alt="Imagen del post">
                        @endif

                        <p class="card-text">
                            <small class="text-muted">Publicado por: {{ $post->user->name }}</small>
                            <br>
                            <small class="text-muted">Categoría: {{ $post->category ? $post->category->name : 'Sin categoría' }}</small>
                            @if ($post->tags->count() > 0)
                                <br>
                                <small class="text-muted">Tags:
                                    @foreach ($post->tags as $tag)
                                        <span class="badge badge-secondary">{{ $tag->name }}</span>
                                    @endforeach
                                </small>
                            @endif
                        </p>

                        {{-- Aquí puedes agregar la funcionalidad de "like" --}}
                            @auth
                            @if (!$post->likedBy(auth()->user()))
                                <form action="{{ route('posts.like', $post) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        <i class="far fa-heart"></i> Me gusta
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('posts.unlike', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-heart"></i> Ya no me gusta
                                    </button>
                                </form>
                            @endif
                        @endauth
                        <p class="card-text">
                            <small class="text-muted">{{ $post->likes()->count() }} Me gusta</small>
                        </p>
                    </div>
                </div>
            @empty
                <p>No hay publicaciones para mostrar.</p>
            @endforelse

            {{ $posts->links() }} {{-- Para mostrar la paginación --}}
        </div>
    </div>
@stop