<!DOCTYPE html>
<html class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @livewireStyles
    <title>Portafolio</title>
</head>

<body class="flex flex-col min-h-screen text-4xl text-matrix-text-bg font-GeostarFill">
    <x-header-component />
    <canvas id="matrix" class="absolute inset-0 w-full h-full z-0"></canvas>
    <div class="container pt-6 z-10 flex flex-grow h-full">
        <div class="py-4 bg-black/80 rounded-lg w-full h-full">
            {{ $slot }}
        </div>
    </div>
    <x-footer-component />
</body>


@livewireScripts

</html>
