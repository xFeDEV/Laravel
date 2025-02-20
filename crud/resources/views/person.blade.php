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
        {{-- @error('title')
            <p style="colore"></p> --}}
        <label>Apellido</label>
        <input type="text" name="apellido">
        {{-- @error('drescription')
        <p style="color:red;">{{$message}}</p> --}}
        <label>Documento</label>
        <input type="text" name="documento">

        <label>Edad</label>
        <input type="text" name="edad">
        
        <input type="submit" value="create">
    </form>    
</body>
</html>