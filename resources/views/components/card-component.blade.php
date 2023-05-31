@props(['image' => '', 'description'])
<div class="max-w-xs overflow-hidden shadow-lg bg-matrix-footer border-matrix-hover border-4 rounded-lg ">
    <img class="w-full" src="{{ $image }}" alt="Imagen de la tarjeta">
    <div class="px-6 py-4">
        <div class="font-bold text-matrix-500 text-xl mb-2">Título de la tarjeta</div>
        <p class=" text-base">{{ $description }}</p>
    </div>
</div>
