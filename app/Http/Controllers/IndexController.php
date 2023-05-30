<?php

namespace App\Http\Controllers;

use App\Models\Proyect;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $proyects = Proyect::all();
        $user = User::first();
        return view('index',[
            'proyects' => $proyects,
            'user' => $user
        ]);
    }
}
