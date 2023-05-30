<!DOCTYPE html>
<html  class="h-full" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Reloj+Digital&display=swap" rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <title>Portafolio</title>
</head>

<body class="flex flex-col min-h-screen text-matrix-text font-GeostarFill relative">

    <header class="bg-matrix-footer z-10">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 z-10" aria-label="Global">
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="#" class="text-sm font-semibold leading-6 ">Sobre mi</a>
                <a href="#" class="text-sm font-semibold leading-6 ">Proyectos</a>
                <a href="#" class="text-sm font-semibold leading-6 ">Skills</a>
                <a href="#" class="text-sm font-semibold leading-6 ">Contacto</a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-matrix-footer px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7  hover:bg-matrix-hover">Sobre mi</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7  hover:bg-matrix-hover">Proyectos</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7  hover:bg-matrix-hover">Skills</a>
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7  hover:bg-matrix-hover">Contacto</a>
                        </div>
                    </div>
                </div>
                <div class="grid items-center justify-between grid-cols-2">
                    <div class="grid-col-1 py-3">
                        <a href="https://github.com/LuisAlberto22?tab=repositories">
                            <i class="fa-brands fa-github fa-2xl" style="color: #7fff00;"></i>
                            GitHub
                        </a>
                    </div>
                    <div class="grid-col-1 py-3">
                        <a href="https://www.hackerrank.com/guichos_mx?hr_r=1">
                            <i class="fa-brands fa-hackerrank fa-2xl" style="color: #7fff00;"></i>
                            hackerRank
                        </a>
                    </div>
                    <div class="grid-col-2 text-center py-3">
                        <a href="https://www.linkedin.com/in/luis-alberto-garcia-orozco-692167216/">
                            <i class="fa-brands fa-linkedin fa-2xl" style="color: #7fff00;"></i>
                            Linkdln
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <canvas id="matrix" class="absolute inset-0 w-full h-full z-0"></canvas>

    <div class="flex-grow container pt-6 z-10">
        {{ $slot }}
    </div>

    <footer class="bg-matrix-footer text-center py-4 z-10">
        <div class="grid grid-cols-3 text-center">
            <div class="grid-col-1">
                <a href="https://github.com/LuisAlberto22?tab=repositories">
                    <i class="fa-brands fa-github fa-2xl" style="color: #7fff00;"></i>
                    GitHub
                </a>
            </div>
            <div class="grid-col-1">
                <a href="https://www.hackerrank.com/guichos_mx?hr_r=1">
                    <i class="fa-brands fa-hackerrank fa-2xl" style="color: #7fff00;"></i>
                    hackerRank
                </a>
            </div>
            <div class="grid-col-1">
                <a href="https://www.linkedin.com/in/luis-alberto-garcia-orozco-692167216/">
                    <i class="fa-brands fa-linkedin fa-2xl" style="color: #7fff00;"></i>
                    Linkdln
                </a>
            </div>
        </div>
    </footer>
</body>

</html>
