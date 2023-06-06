<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create([
            'name' => 'C#',
            'logo' => 'fa-brands fa-windows',
            'level_id' => '1'
        ]);
        Language::create([
            'name' => 'Java',
            'logo' => 'fa-brands fa-java',
            'level_id' => '1'
        ]);
        Language::create([
            'name' => 'PHP',
            'logo' => 'fa-brands fa-php',
            'level_id' => '1'
        ]);
        Language::create([
            'name' => 'HTML',
            'logo' => 'fa-brands fa-html5',
            'level_id' => '1'
        ]);
        Language::create([
            'name' => 'CSS',
            'logo' => 'fa-solid fa-file-code',
            'level_id' => '1'
        ]);
        Language::create([
            'name' => 'JavaScript',
            'logo' => 'fa-brands fa-js',
            'level_id' => '1'
        ]);
    }
}
