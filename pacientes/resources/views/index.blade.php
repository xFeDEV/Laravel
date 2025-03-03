<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabla pacientes</title>
</head>
<body>
    @include('components.nav')
    <div class="container text-center">
        @if($message = Session::get('success'))
            <div style="padding: 15px; background-color: green; color:white;">
                <p>{{$message}}</p>
            </div>
        @endif

        @if($message = Session::get('danger'))
            <div style="padding: 15px; background-color: red; color:white;">
                <p>{{$message}}</p>
            </div>
        @endif
        <h1>Tabla pacientes</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Direccion</th>
                <th scope="col">Telefono</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Mostar</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($patients as $patient)
                <tr>
                    <th scope="row">{{$patient->id}}</th>
                    <td>{{$patient->documento}}</td>
                    <td>{{$patient->nombre}}</td>
                    <td>{{$patient->email}}</td>
                    <td>{{$patient->direccion}}</td>
                    <td>{{$patient->telefono}}</td>
                    <td><a href="{{route('edit', $patient->id)}}" class="btn btn-primary">Editar</a></td>
                    <td><form method="POST" action="{{route('destroy', $patient->id)}}">
                        @csrf
                        @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Eliminar">
                        </form>
                    </td>
                    <td><a href="{{route('show', $patient->id)}}" class="btn btn-info">Mostrar</a></td>
                </tr>
                @empty
                    <h1>LISTA VACIA</h1>
                @endforelse
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>