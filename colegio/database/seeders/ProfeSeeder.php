<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;

class ProfeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profesor::create([
            'id' => '1',
            'name' => 'Felipe Londono',
            'materia' => 'Laravel',
        ]);

        Profesor::create([
            'id' => '2',
            'name' => 'Diego Lagarto',
            'materia' => 'Python',
        ]);
        Profesor::create([
            'id' => '3',
            'name' => 'Alejandro',
            'materia' => 'Negocios',
        ]);
    }
}
