@props(['image'])
<div class="flex justify-center items-center h-screen">
    <div class="w-1/2">
        <p class="text-center">
            Hola Soy Luis, Programador Jr Egresado de la UDG
        </p>
    </div>
    <div class="w-1/2">
        <img src="{{Storage::url('public/Luis/Neo.jpg')}}" alt="Imagen" class="mx-auto rounded-full border-4 border-matrix-hover">
    </div>
</div>
