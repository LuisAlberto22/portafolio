<!DOCTYPE html>
<html  class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Reloj+Digital&display=swap" rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <title>Portafolio</title>
</head>

<body class="flex flex-col min-h-screen text-4xl text-matrix-text font-GeostarFill relative">

    <x-header-component />

    <canvas id="matrix" class="absolute inset-0 w-full h-full z-0"></canvas>

    <div class="flex-grow container pt-6 z-10 ">
        <div class="py-4 bg-black/70">
            {{ $slot }}
        </div>
    </div>

    <x-footer-component />

</body>

</html>
