{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@extends('layout.landing')

@section('title', 'Index')
    <div class="container-fluid row">
    
@section('content')
    <h1>Hola index</h1>
    
    @component('_components.card')
        @slot('title', 'Pagina principal 1')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum velit totam ex iusto rem deserunt sapiente aspernatur libero animi corrupti.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Pagina principal 2')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum velit totam ex iusto.')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Pagina principal 3')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae harum adipisci aspernatur pariatur, et fugit sequi consequatur suscipit dolores nisi quos, ipsum quidem recusandae ipsam labore ad culpa omnis officiis, eaque aperiam consectetur molestiae rerum perspiciatis nostrum! Rerum cupiditate, aspernatur placeat nesciunt reprehenderit, aperiam veniam dolore aliquid nulla eos officia!')
    @endcomponent
    </div>
@endsection

 --}}

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 </head>
 <body>
    <a href="{{route('create')}}">Crear nueva nota</a>
    <h1>Listado</h1>
    <ul>
        @forelse($notes as $note)

        <li>

            {{$note->title}}
            {{$note->drescription}}
            <a href="{{route('show', $note->id)}}"{{$note->title}}></a>
            <a href="{{route('edit', $note->id)}}">Editar</a>
{{-- 
            <form action="{{route('destroy', $nota->id)}}" method="POST">
                @csrt
            </form> --}}
        </li>
        @empty
            <li>Lista vacia</li>
        @endforelse
    </ul>
 </body>
 </html>

