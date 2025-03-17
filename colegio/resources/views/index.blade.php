<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relaciones</title>
</head>
<body>
    {{-- <h1>{{$user->name}} Phone: </h1>
    <ul>
        @foreach ($user->phones as $phone)
            <li>{{$phone->prefix}} {{$phone->phone_number}}</li>
        @endforeach
    </ul> --}}

    <h1>Nombre: {{$profe->name}}  </h1>
    <ul>
        @foreach ($profe->alumnos as $alumno)
            <li>{{$alumno->name}}</li>
        @endforeach
    </ul>
</body>
</html>