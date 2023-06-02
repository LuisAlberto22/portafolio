@props(['title'])
<div class="max-w-sm w-full lg:max-w-full lg:flex">
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-4">{{$title}}</h1>
        <div class="grid grid-cols-2 gap-4">
            {{$slot}}
        </div>
    </div>
</div>