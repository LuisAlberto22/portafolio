<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable =["*"];

    public function proyects()
    {
        return $this->belongsToMany(Proyect::class);
    }

    public function frameworks()
    {
        return $this->hasMany(Framework::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
