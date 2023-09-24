<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @livewireStyles()
    <title>@yield('title')</title>
</head>
<body>
    @include('navigation-menu')
    {{-- <div class= "border border-solid rounded border-indigo-600 cursor-pointer shadow-lg">
    <p class= " text-5xl font-bold text-center">
        Hola Mundo ¡¡
    </p> --}}
</div>
    <div>
        @yield('content')
    </div>
    @livewireScripts()
</body>
</html>
