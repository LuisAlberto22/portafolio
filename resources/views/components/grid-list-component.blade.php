@props(['title'])
<div class="flex bg-red-600 w-full h-full justify-between flex-col">
    <div class="">
        {{$title}}
    </div>
    <div class="flex flex-wrap h-full">
        {{$slot}}
    </div>
</div>