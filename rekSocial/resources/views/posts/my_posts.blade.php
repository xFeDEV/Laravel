@extends('adminlte::page')

@section('title', 'Mis Publicaciones')

@section('content_header')
    <h1>Mis Publicaciones</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            @forelse ($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h5>
                            <div>
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning mr-2">
                                    <i class="fas fa-edit"></i> Editar
                                </a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este post?')">
                                        <i class="fas fa-trash"></i> Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
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
                                <form action="{{ route('posts.like', $post) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        <i class="far fa-heart"></i> Me gusta
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('posts.unlike', $post) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-heart"></i> Ya no me gusta
                                    </button>
                                </form>
                            @endif
                        @endauth
                        <small class="text-muted">{{ $post->likes()->count() }} Me gusta</small>
                    </div>
                </div>
            @empty
                <p>No has creado ninguna publicación todavía.</p>
            @endforelse

            {{ $posts->links() }} {{-- Para mostrar la paginación --}}
        </div>
    </div>
@stop