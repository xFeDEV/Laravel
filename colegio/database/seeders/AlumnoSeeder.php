<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::create([
            'id' => '1',
            'name' => 'Federico Duque',
            'profe_id' => '1',
        ]);

        Alumno::create([
            'id' => '2',
            'name' => 'Bryan Lopez',
            'profe_id' => '1',
        ]);
        Alumno::create([
            'id' => '3',
            'name' => 'Edison Betancurt',
            'profe_id' => '1',
        ]);
    }
}
