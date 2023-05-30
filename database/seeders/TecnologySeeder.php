<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tecnology::create([
            'name' => 'GitHub',
            'logo' => '',
            'level_id' => 1,
        ]);
    }
}
