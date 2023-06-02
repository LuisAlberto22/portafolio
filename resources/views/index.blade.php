<x-layout>
    <x-about-component />
    <x-grid-list-component title="Lenguajes">

      @foreach ($languages as $item)
         <x-horizontal-card-component url="#" icon="{{$item->logo}}" p="{{$item->level->name}}" span="{{$item->name}}"/>
      @endforeach

   </x-grid-list-component>
        @foreach ($proyects as $item)
            <x-card-component description="{{ $item->name }}"
                image="https://th.bing.com/th/id/R.670bc3510b4a5f071a57041945d5b2f3?rik=k9DL%2feRjLKXtbw&riu=http%3a%2f%2f4.bp.blogspot.com%2f-2iqaeSyUsHU%2fUkWBnXLPefI%2fAAAAAAAAWXw%2f1qKTvz_-iSs%2fs1600%2fDescargar%2bPack%2bBellos%2bFondos%2bde%2bpaisajes%2bHD%2b%25252842%252529.jpg&ehk=mL5Qyu3n4Sgkop582XmWB2WOVB0OoO%2fw2Z7b133fBJs%3d&risl=&pid=ImgRaw&r=0" />
        @endforeach
    <x-contact-form />
</x-layout>
