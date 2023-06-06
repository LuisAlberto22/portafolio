<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Youtube extends Model
{
    use HasFactory;

    public function proyect() : BelongsTo
    {
        return $this->BelongsTo(Proyect::class);
    }

}
