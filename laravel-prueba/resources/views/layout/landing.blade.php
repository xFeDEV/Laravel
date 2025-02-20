<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>

    {{--@include('layout.partials.menu') --}}

    @include('layout.partials.menu')

    @yield('content')
    
</body>
</html>
