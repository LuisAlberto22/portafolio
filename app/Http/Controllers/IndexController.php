<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Proyect;
use App\Models\Tecnology;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('index', [
            'user' =>  User::first(),
            'proyects' => Proyect::all(),
            'languages' =>  Language::all(),
            'tecnologies' => Tecnology::all()
        ]);
    }
}
