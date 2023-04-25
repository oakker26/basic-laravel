<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title",env('APP_NAME'))</title>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
</head>
<body>

<nav class=" border rounded p-3 m-3">
    <a class="btn btn-outline-info m-2" href={{ url('/', []) }}>home</a>
    <a class="btn btn-outline-info m-2" href={{ route('page.about') }}>about</a>
    <a class="btn btn-outline-info m-2" href={{ route('page.contact') }}>contact</a>
</nav>

<hr>
@yield('content')
@
<script src={{ asset('js/bootstrap.bundle.min.js') }}></script>
</body>
</html>
