<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Luis Alberto García Orozco',
            'user' => 'admin',
            'password' => Hash::make('LuisGarciaPW32'),
            'about_me' => '',
            'photo' => '',
            'level_id' => '1'
        ]);
    }
}
