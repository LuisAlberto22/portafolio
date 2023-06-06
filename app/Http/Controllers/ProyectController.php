<?php

namespace App\Http\Controllers;

use App\Models\Proyect;

class ProyectController extends Controller
{
    public function show(Proyect $proyect)
    {
       return view('proyect-show',compact('proyect'));
    }
}
