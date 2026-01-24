<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            "name" => "Dorivaldo Valentim",
            "email" => "dorivaldovalentim@gmail.com",
            "password" => Hash::make(getenv('DEFAULT_USER_PASSWORD')),
        ]);

        User::create([
            "name" => "Vânio Van-Dúnem",
            "email" => "vauriovandunem@gmail.com",
            "password" => Hash::make(getenv('DEFAULT_USER_PASSWORD')),
        ]);
    }
}
