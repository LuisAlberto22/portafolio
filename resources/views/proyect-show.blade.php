<x-layout>

    <div class="flex flex-col justify-between items-center">
        <div class="text-orange-500 ml-auto">
            {{$proyect->date}}
        </div>
        <img src="{{Storage::url($proyect->main_image)}}" class="bg-white rounded-lg aspect-square h-96 w-96" alt="">
        <h1 class="text-orange-500 text-7xl">{{$proyect->name}}</h1>
        <h2 class="">{{$proyect->description}}</h2>
    </div>

    @livewire('carousel-component', ['proyect' => $proyect], key($proyect->id))
</x-layout>