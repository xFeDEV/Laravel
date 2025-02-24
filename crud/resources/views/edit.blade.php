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
    <form method="POST" action="{{route('update', $person->id)}}">
        @method('put')
        @csrf
        <label> Nombre:</label>
        <input type="text" name="nombre" value="{{$person->nombre}}">
        <label>Apellido</label>
        <input type="text" name="apellido" value="{{$person->apellido}}">
        <label>Username</label>
        <input type="text" name="username" value="{{$person->username}}">
        <label>Email</label>
        <input type="text" name="email" value="{{$person->email}}">
        <label>Direccion</label>
        <input type="text" name="direccion" value="{{$person->direccion}}">
        <label>Direccion2</label>
        <input type="text" name="direccion2" value="{{$person->direccion2}}">
        <label>Pais</label>
        <input type="text" name="pais" value="{{$person->pais}}">
        <label>Ciudad</label>
        <input type="text" name="ciudad" value="{{$person->ciudad}}">
        <label>Codigo Postal</label>
        <input type="number" name="codigopostal" value="{{$person->codigopostal}}">
        <input type="submit" value="update">
    </form>
</body>
</html>