<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>show</title>
</head>
<body class="text-center">
    @include('components.nav')
    <div class="container">    
    <h1>Datos del paciente {{$patient->nombre}}</h1>
    <div class='row m-5'>
        <div class="col-md-6"> 
          <div class="row border p-2"> Documento</div>
          <div class="row border p-2"> Nombre</div>
          <div class="row border p-2"> Email</div>
          <div class="row border p-2"> Direccion</div>
          <div class="row border p-2"> Telefono</div>
        </div>
        <div class="col-md-6"> 
            <div class="row border p-2">{{$patient->documento}}</div>
            <div class="row border p-2">{{$patient->nombre}}</div>
            <div class="row border p-2">{{$patient->email}}</div>
            <div class="row border p-2">{{$patient->direccion}}</div>
            <div class="row border p-2">{{$patient->telefono}}</div>
        </div>
      </div>
    

      <a href="{{route('index')}}" class="btn btn-primary mt-3">Volver</a>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>