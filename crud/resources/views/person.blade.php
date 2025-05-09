<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar personas</title>
</head>
<body>
    <form method="POST" action="{{route('store')}}">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre">
        @error('nombre')
            <p style="color:red;">{{$message}}</p>
        @enderror
        <label>Apellido</label>
        <input type="text" name="apellido">
        @error('apellido')
            <p style="color:red;">{{$message}}</p>
        @enderror
        <label>Username</label>
        <input type="text" name="username">
        @error('username')
            <p style="color:red;">{{$message}}</p>
        @enderror

        <label>Email</label>
        <input type="text" name="email">

        <label>Direccion</label>
        <input type="text" name="direccion">

        <label>Direccion 2</label>
        <input type="text" name="direccion2">

        <label>Pais</label>
        <input type="text" name="pais">

        <label>Ciudad</label>
        <input type="text" name="ciudad">

        <label>Codigo Postal</label>
        <input type="number" name="codigopostal">
        
        <input type="submit" value="create">
    </form>    
</body>
</html>