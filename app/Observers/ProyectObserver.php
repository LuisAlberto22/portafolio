<?php

namespace App\Observers;

use App\Models\Proyect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProyectObserver
{
    /**
     * Handle the Proyect "created" event.
     */

    public function creating(Proyect $proyect = null)
    {
        $proyect->slug = Str::slug($proyect->name);
        Storage::makeDirectory("public/proyects/$proyect->slug");
    }

    public function created(Proyect $proyect): void
    {
        //
    }

    /**
     * Handle the Proyect "updated" event.
     */
    public function updated(Proyect $proyect): void
    {
        //
    }

    /**
     * Handle the Proyect "deleted" event.
     */
    public function deleted(Proyect $proyect): void
    {
        Storage::deleteDirectory("public/proyects/$proyect->slug");
    }

    /**
     * Handle the Proyect "restored" event.
     */
    public function restored(Proyect $proyect): void
    {
        //
    }

    /**
     * Handle the Proyect "force deleted" event.
     */
    public function forceDeleted(Proyect $proyect): void
    {
        //
    }
}
