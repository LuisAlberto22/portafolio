@props(['icon','url','span','p'])

<a href="{{$url}}" class="flex bg-matrix-footer h-full items-center flex-col">
    <i class="{{$icon}} fa-lg h-auto w-auto"></i>
    <div class="">
        <h5 class="text-lg">{{$span}}</h5>
        <p class="text-sm">{{$p}}</p>
    </div>
</a>
