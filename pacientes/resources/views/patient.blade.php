<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    @include('components.nav')
    <div class="container">
    <form method="POST" action="{{route('store')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Documento</label>
            <input class="form-control" name="documento">
        </div>
        @error('documento')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        @error('nombre')
        <p style="color:red;">{{$message}}</p>
        @enderror
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        @error('email')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <div class="mb-3">
            <label class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion">
        </div>
        @error('direccion')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <div class="mb-3">
            <label class="form-label">Telefono</label>
            <input type="text" class="form-control" name="telefono">
        </div>
        @error('telefono')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>