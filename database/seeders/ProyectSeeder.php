<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\Proyect;
use Illuminate\Database\Seeder;

class ProyectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proyect = Proyect::create([
            'name' => 'UDG Online',
            'main_image' => '',
            'gitHub' => 'https://github.com/LuisAlberto22/UDGOnline-Laravel',
            'description' => 'Aplicación web para la educacion desarrollada como proyecto modular para la Universidad de Guadalajara, con la finalidad de reunir en un mismo lugar las herramientas classroom y poder transmitir las clases en la misma plataforma sin tener que usar varias plataformas, utiliza apis de la UDG para gestionar las clases y horarios',
            'date' => '2021/05/30',
            'scope_id' => 1
        ]);
        $proyect->languages()->attach(3, ['framework_id' => 1]);

        $proyect = Proyect::create([
            'name' => 'PortFolio',
            'main_image' => 'https://github.com/LuisAlberto22/portafolio',
            'gitHub' => '',
            'description' => 'Página web ',
            'date' => '2023/05/06',
            'scope_id' => 1
        ]);
        $proyect->languages()->attach(3, ['framework_id' => 1]);
        $proyect->languages()->attach(4);
        $proyect->languages()->attach(5, ['framework_id' => 5]);
        $proyect->languages()->attach(6, ['framework_id' => 7]);
        
        $proyect = Proyect::create([
            'name' => 'Grafos',
            'gitHub' => 'https://github.com/LuisAlberto22/Grafos',
            'main_image' => '',
            'description' => 'Aplicacion de escritorio capaz de recorrer grafos para encontrar el camino mas corto, cuenta con una interfaz grafica en la cual se dibujan los grafos y sus pesos',
            'date' => '2023/05/06',
            'scope_id' => 2
        ]);
        $proyect->languages()->attach(2);
        
        $proyect = Proyect::create([
            'name' => 'CURD',
            'gitHub' => 'https://github.com/LuisAlberto22/CRUD',
            'main_image' => '',
            'description' => 'Aplicacion de escritorio capaz de consultar una base de datos SQL Server',
            'date' => '2022/02/01',
            'scope_id' => 2
        ]);
        $proyect->languages()->attach(1, ['framework_id' => 2]);

        $proyect = Proyect::create([
            'name' => 'Lector de archivos',
            'gitHub' => 'https://github.com/LuisAlberto22/LecturaDeArchivos',
            'main_image' => '',
            'description' => 'Aplicacion de escritorio capaz de leer archivos de texto y mostrar su contenido ordenado por categorias combinando 2 formas de busqueda (Equals,contains), este programa tambien es multi lenguaje (Español,Ingles,Chino y Aleman) y fue un proyecto final de estructuras de datos',
            'date' => '2022/02/01',
            'scope_id' => 2
        ]);
        $proyect->languages()->attach(2);
    }
}
