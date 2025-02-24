<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lista personas</title>
 </head>
 <body class="text-center m-3">
    <a href="{{route('create')}}" class="btn btn-primary m-3">Crear nueva persona</a>
    <h1 class="mb-3">Listado</h1>
    <div class="container-sm">
        <table class="table table-info">
            <thead class="table-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Direccion</th>
                <th scope="col">Direccion2</th>
                <th scope="col">Pais</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Codigo Postal</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
            </thead>
            <tbody>
            @forelse($people as $person)
                <tr>
                    <th scope="row">{{$person->id}}</th>
                    <td>{{$person->nombre}}</td>
                    <td>{{$person->apellido}}</td>
                    <td>{{$person->username}}</td>
                    <td>{{$person->email}}</td>
                    <td>{{$person->direccion}}</td>
                    <td>{{$person->direccion2}}</td>
                    <td>{{$person->pais}}</td>
                    <td>{{$person->ciudad}}</td>
                    <td>{{$person->codigopostal}}</td>
                    <td><a href="{{route('edit', $person->id)}}" class="btn btn-primary">Editar</a></td>
                    <td><form  method="POST" action="{{route('destroy', $person->id)}}">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-primary" type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @empty
                <li>Lista vacia</li>
            @endforelse
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>
 </html>