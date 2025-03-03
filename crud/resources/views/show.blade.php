<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('index')}}">Volver</a>

    <h1>{{$person->nombre}}</h1>
    <h1>{{$person->apellido}}</h1>
    <h1>{{$person->username}}</h1>
    <h1>{{$person->email}}</h1>
    <h1>{{$person->direccion}}</h1>
    <h1>{{$person->direccion2}}</h1>
    <h1>{{$person->pais}}</h1>
    <h1>{{$person->ciudad}}</h1>
    <h1>{{$person->codigopostal}}</h1>
    
</body>
</html>