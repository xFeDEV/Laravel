<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{route('store')}}">
        @csrf
        <label>Title:</label>
        <input type="text" name="title">
        {{-- @error('title')
            <p style="colore"></p> --}}
        <label>Descripcion</label>
        <input type="text" name="description">
        {{-- @error('drescription')
        <p style="color:red;">{{$message}}</p> --}}
        <input type="submit" value="create">
    </form>    
</body>
</html>