<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proyect extends Model
{
    use HasFactory;

    protected $guarded  = ['slug','id'];

    public function tecnologies(): BelongsToMany
    {
        return $this->belongsToMany(Tecnology::class);
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class)->withPivot('framework_id');
    }

    public function links(): HasMany
    {
        return $this->hasMany(Link::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function youtubes() : HasMany
    {
        return $this->hasMany(Youtube::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
