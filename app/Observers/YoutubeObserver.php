<?php

namespace App\Observers;

use App\Models\Youtube;

class YoutubeObserver
{
    /**
     * Handle the Youtube "created" event.
     */
    public function created(Youtube $youtube): void
    {
        //
    }

    /**
     * Handle the Youtube "updated" event.
     */
    public function updated(Youtube $youtube): void
    {
        //
    }

    /**
     * Handle the Youtube "deleted" event.
     */
    public function deleted(Youtube $youtube): void
    {
        //
    }

    /**
     * Handle the Youtube "restored" event.
     */
    public function restored(Youtube $youtube): void
    {
        //
    }

    /**
     * Handle the Youtube "force deleted" event.
     */
    public function forceDeleted(Youtube $youtube): void
    {
        //
    }
}
