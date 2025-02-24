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
    <form method="POST" action="{{route('update', $note->id)}}">
        @method('put')
        @csrf
        <label> Title:</label>
        <input type="text" name="title" value="{{$note->title}}">
        <label>Description</label>
        <input type="text" name="description" value="{{$note->description}}">
        <input type="submit" value="UPDATE">
    </form>
</body>
</html>