<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shift::create([
            'slug' => 'manha',
            'name' => 'Manhã',
            'starts_at' => '08:00:00',
            'ends_at' => '12:00:00',
        ]);

        Shift::create([
            'slug' => 'tarde',
            'name' => 'Tarde',
            'starts_at' => '13:00:00',
            'ends_at' => '17:00:00',
        ]);

        Shift::create([
            'slug' => 'noite',
            'name' => 'Noite',
            'starts_at' => '18:00:00',
            'ends_at' => '22:00:00',
        ]);
    }
}
