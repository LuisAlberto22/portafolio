<style>
    #menu {
        height: calc(100vh - 4rem);
    }
</style>

<header class="bg-matrix-footer z-20 sticky top-0" x-data="{ open: false }">
    <div class="container flex items-center h-16">

        <div class="lg:hidden" >
            <a class="flex items-center z-20" x-on:click="open = !open">
                <svg class="h-8 w-8" viewBox="0 0 24 24">
                    <path fill="#44F24F"
                    d="M3 6a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1zm0 6a1 1 0 0 1 1-1h16a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1zm1 5a1 1 0 1 0 0 2h16a1 1 0 1 0 0-2H4z" />
                </svg>
            </a>
        </div>

        <div class="hidden lg:block cursor-pointer h-full justify-center px-4 hover:bg-matrix-hover">
            <a href="" class="text-matrix-text cursor-pointer h-full flex justify-center px-4">
                <img src="{{ Storage::url('public/Luis/Neo.jpg') }}" alt="Imagen"
                    class="mx-auto rounded-full border-4 border-matrix-hover">
                <span class="ml-auto text-lg px-4 py- h-full flex items-center justify-center">
                    Luis Alberto García Orozco
                </span>
            </a>
        </div>


        <div class="ml-auto h-full hidden lg:block">
            <div class="hover:bg-matrix-hover inline-block h-full ">
                <a class="text-lg pr-3 hover:bg-matrix-hover h-full" href="">Sobre mí</a>
            </div>
            <div class="inline-block hover:bg-matrix-hover h-full ">
                <a class="text-lg pr-3 hover:bg-matrix-hover h-full" href="">Habilidades</a>
            </div>
            <div class="inline-block hover:bg-matrix-hover h-full ">
                <a class="text-lg pr-3 hover:bg-matrix-hover h-full" href="">Proyectos</a>
            </div>
            <div class="inline-block hover:bg-matrix-hover h-full ">
                <a class="text-lg pr-3 hover:bg-matrix-hover h-full" href="">Contacto</a>
            </div>
        </div>
    </div>
    <nav id="menu" x-show="open" class="bg-matrix-footer bg-opacity-25 z-20 absolute w-full">
        <div class="container h-full grid grid-cols-1 bg-matrix-footer">
            <div class="h-1/2 inline items-center justify-center">
                <ul>
                    <li class="px-5 hover:bg-matrix-hover">
                        <a class="py-2 px-4 text-lg item-center flex" href="">
                            Sobre mí
                        </a>
                    </li>
                    <li class="px-5 hover:bg-matrix-hover">
                        <a class="py-2 px-4 text-lg item-center flex" href="">
                            Habilidades
                        </a>
                    </li>
                    <li class="px-5 hover:bg-matrix-hover">
                        <a class="py-2 px-4 text-lg item-center flex" href="">
                            Proyectos
                        </a>
                    </li>
                    <li class="px-5 hover:bg-matrix-hover">
                        <a class="py-2 px-4 text-lg item-center flex" href="">
                            Contacto
                        </a>
                    </li>
                </ul>
                <div class="h-1/2 border-t-2 border-matrix-hover flex ">
                    <div class="grid grid-cols-2 items-center justify-center">

                        <a href="https://github.com/LuisAlberto22?tab=repositories" class="col-span-1 items-center">
                            <i class="fa-brands fa-github fa-2xl" style="color: #7fff00;"></i>
                            GitHub
                        </a>
                        <a href="https://www.hackerrank.com/guichos_mx?hr_r=1" class="col-span-1 items-center">
                            <i class="fa-brands fa-hackerrank fa-2xl" style="color: #7fff00;"></i>
                            hackerRank
                        </a>
                        <a href="https://www.linkedin.com/in/luis-alberto-garcia-orozco-692167216/"
                            class="col-span-2 items-center justify-center text-center">
                            <i class="fa-brands fa-linkedin fa-2xl" style="color: #7fff00;"></i>
                            Linkdln
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
