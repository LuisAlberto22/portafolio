<header x-data="{ open: false }" class="bg-matrix-footer z-20 sticky top-0">
    <div class="mx-auto px-4 py-2 flex items-center justify-between">
        <div class="flex items-center">
            <img src="{{ Storage::url('public/Luis/Neo.jpg') }} " alt="Luis Alberto Garcia Orozco"
                class="w-12 h-12 mr-2 rounded-full">
            <span class="text-xl text-matrix-text hidden lg:block">Luis Alberto Garcia Orozco</span>
        </div>
        <div class="hidden md:flex items-center space-x-4">
            <a href="#" class="text-matrix-text text-lg">Sobre mí</a>
            <a href="#" class="text-matrix-text text-lg">Habilidades</a>
            <a href="#" class="text-matrix-text text-lg">Proyectos</a>
            <a href="#" class="text-matrix-text text-lg">Contacto</a>
        </div>
        <button @click="open = !open" class="md:hidden text-white">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>
    <div x-show="open" class="md:hidden bg-gray-700">
        <div class="mx-auto px-4 py-2 flex items-center space-x-4">
            <a href="#" class="text-matrix-text text-lg">Sobre mí</a>
            <a href="#" class="text-matrix-text text-lg">Habilidades</a>
            <a href="#" class="text-matrix-text text-lg">Proyectos</a>
            <a href="#" class="text-matrix-text text-lg">Contacto</a>
        </div>
        <div class="mx-auto px-4 py-2 flex items-center absolute justify-center">
            <div class="flex items-center space-x-4">
                <a href="#" class="text-white">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                <a href="#" class="text-white">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 17h8m0 0v-8m0 0-8-8M21 3h-8m0 0V.997m0 0L3.586 8.414a2 2 0 000 2.828L12 20.586m9.414-9.414a2 2 0 000-2.828L12 3.414">
                        </path>
                    </svg>
                </a>
                <a href="#" class="text-white">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>
