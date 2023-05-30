@props(['image' => '', 'description'])
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{ $image }}" alt="Card image cap">
    <div class="card-body">
        <p class="card-text">{{ $description }}</p>
    </div>
</div>
