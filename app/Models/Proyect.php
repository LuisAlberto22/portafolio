<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proyect extends Model
{
    use HasFactory;

    protected $fillable = ["*"];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function tecnologies(): BelongsToMany
    {
        return $this->belongsToMany(Tecnology::class);
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class);
    }

    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }
}
