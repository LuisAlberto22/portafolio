<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnology extends Model
{
    use HasFactory;

    protected $fillable = ["*"];


    public function proyects()
    {
        return $this->belongsToMany(Proyect::class);
    }
}
