<x-layout>
    {{$user->name}}
    {{$user->about_me}}
   @foreach ($proyects as $item)
    <x-card_component description="{{$item->name}}" image="" />
   @endforeach
</x-layout>