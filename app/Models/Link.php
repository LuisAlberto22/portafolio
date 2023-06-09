<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $fillable = ["*"];

    use HasFactory;

    public function proyect()
    {
        return $this->belongsTo(Proyect::class);
    }
}
