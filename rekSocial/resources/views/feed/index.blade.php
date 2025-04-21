@extends('adminlte::page')

@section('title', 'Feed de Publicaciones')

@section('content_header')
    <h1>Feed de Publicaciones</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            @forelse ($posts as $post)
                <div class="card mb-4 elevation-1">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            {{-- Avatar del usuario (si tienes la URL) --}}
                            <i class="fas fa-user-circle fa-lg mr-2"></i> {{ $post->user->name }}
                            <h5 class="card-title mb-0 ml-2"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h5>
                        </div>
                        <p class="card-text">
                            {{ $post->content }}
                        </p>

                        @if ($post->image_url)
                            <img src="{{ $post->image_url }}" class="img-fluid mb-3 rounded" alt="Imagen del post">
                        @endif

                        <p class="card-text">
                            <small class="text-muted">Publicado {{ $post->created_at->diffForHumans() }}</small>
                            <br>
                            @if ($post->category)
                                <span class="badge badge-primary mr-1">{{ $post->category->name }}</span>
                            @endif
                            @if ($post->tags->count() > 0)
                                Tags:
                                @foreach ($post->tags as $tag)
                                    <span class="badge badge-info mr-1">{{ $tag->name }}</span>
                                @endforeach
                            @endif
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                @auth
                                    @if (!$post->likedBy(auth()->user()))
                                        <form action="{{ route('posts.like', $post) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-primary">
                                                <i class="far fa-heart mr-1"></i> Me gusta
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('posts.unlike', $post) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-primary">
                                                <i class="fas fa-heart mr-1"></i> Ya no me gusta
                                            </button>
                                        </form>
                                    @endif
                                @endauth
                                <span class="text-muted ml-2"><i class="fas fa-heart mr-1"></i> {{ $post->likes()->count() }}</span>
                            </div>
                            @auth
                                @if (auth()->user()->id === $post->user_id)
                                    <div>
                                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning mr-2"><i class="fas fa-edit"></i> Editar</a>
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este post?')"><i class="fas fa-trash"></i> Eliminar</button>
                                        </form>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
                <hr class="my-4">
            @empty
                <p>No hay publicaciones para mostrar.</p>
            @endforelse

            {{ $posts->links() }}
        </div>
    </div>
@stop