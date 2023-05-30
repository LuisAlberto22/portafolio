<?php

namespace Database\Seeders;

use App\Models\Proyect;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProyectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proyect = Proyect::create([
            'name' => 'UDG Online',
            'slug' => Str::slug('UDG Online'),
            'main_image' => '',
            'description' => '',
            'date' => '2023/03/03',
            'user_id' => 1,
            'scope_id' => 1
        ]);
        $proyect->languages()->attach('1');
    }
}
