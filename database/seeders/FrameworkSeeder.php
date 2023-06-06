<?php

namespace Database\Seeders;

use App\Models\Framework;
use Illuminate\Database\Seeder;

class FrameworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Framework::create([
            'name' => 'Laravel',
            'logo' => 'fa-brands fa-laravel',
            'level_id' => '1',
            'language_id' => '3'
        ]);
        Framework::create([
            'name' => '.Net Framework',
            'logo' => '',
            'level_id' => '1',
            'language_id' => '1'
        ]);
        Framework::create([
            'name' => '.Net Core',
            'logo' => '',
            'level_id' => '1',
            'language_id' => '1'
        ]);
        Framework::create([
            'name' => 'Livewire',
            'logo' => '',
            'level_id' => '1',
            'language_id' => '3'
        ]);
        Framework::create([
            'name' => 'Tailwind',
            'logo' => '',
            'level_id' => '1',
            'language_id' => '5'
        ]);
        Framework::create([
            'name' => 'Entity Framework',
            'logo' => '',
            'level_id' => '1',
            'language_id' => '1'
        ]);
        Framework::create([
            'name' => 'Alphine',
            'logo' => '',
            'level_id' => '1',
            'language_id' => '6'
        ]);
    }
}
