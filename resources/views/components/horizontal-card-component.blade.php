@props(['icon','url','span','p'])

<a href="{{$url}}" class="flex flex-col items-center border border-matrix-components rounded-lg shadow md:flex-row md:max-w-xl hover:bg-matrix-hover bg-matrix-footer">
    <i class="{{$icon}} pl-7 fa-2xl object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"></i>
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-matrix-text">{{$span}}</h5>
        <p class="mb-3 font-normal text-matrix-components">{{$p}}</p>
    </div>
</a>
