@extends('adminlte::page')

@section('title', 'Editar Post')

@section('content_header')
    <h1>Editar Post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('posts.update', $post) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                </div>

                <div class="form-group">
                    <label for="image_url">URL de la imagen (opcional)</label>
                    <input type="text" name="image_url" class="form-control" value="{{ old('image_url', $post->image_url) }}">
                </div>

                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea name="content" class="form-control" rows="5" required>{{ old('content', $post->content) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="category_id">Categoría</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">-- Selecciona una categoría --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Tags</label>
                    <div class="d-flex flex-wrap">
                        @foreach ($tags as $tag)
                            <div class="form-check mr-3">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                    {{ (is_array(old('tags')) ? in_array($tag->id, old('tags')) : $post->tags->contains($tag->id)) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@stop