@extends('adminlte::page')

@section('title', 'Crear Post')

@section('content_header')
    <h1>Crear nuevo post</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- Mostrar errores --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                {{-- Título --}}
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                </div>

                {{-- Contenido --}}
                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea name="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
                </div>

                {{-- Categoría --}}
                <div class="form-group">
                    <label for="category_id">Categoría</label>
                    <select name="category_id" class="form-control" required>
                        <option value="">-- Selecciona una categoría --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Tags --}}
                <div class="form-group">
                    <label>Tags</label>
                    <div class="d-flex flex-wrap">
                        @foreach ($tags as $tag)
                            <div class="form-check mr-3">
                                <input class="form-check-input" type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                    {{ (is_array(old('tags')) && in_array($tag->id, old('tags'))) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Botón --}}
                <button type="submit" class="btn btn-primary">Publicar</button>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@stop
