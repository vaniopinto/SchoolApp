<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'Engenharia Informática',
            'degree' => 'Licenciatura',
            'duration_years' => 5,

        ]);
        Course::create([
            'name' => 'Direito',
            'degree' => 'Licenciatura',
            'duration_years' => 4,

        ]);
        Course::create([
            'name' => 'Recursos Humanos',
            'degree' => 'Licenciatura',
            'duration_years' => 4,

        ]);

        Course::create([
            'name' => 'Psicologia',
            'degree' => 'Licenciatura',
            'duration_years' => 4,

        ]);

    
    }
}
