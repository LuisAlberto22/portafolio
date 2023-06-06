<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CarouselComponent extends Component
{

    public $proyect;

    public function render()
    {
        return view(
            'livewire.carousel-component',
            [
                'images' => $this->proyect->files()->paginate(10)
            ]
        );
    }
}
