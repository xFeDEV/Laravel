<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Hacking'],
            ['name' => 'Inteligencia Artificial'],
            ['name' => 'Tecnología'],
            ['name' => 'Innovación'],
            ['name' => 'Desarrollo Web'],
            ['name' => 'Programación'],
            ['name' => 'Seguridad Informática'],
            ['name' => 'Cloud Computing'],
            ['name' => 'Criptografía'],
            ['name' => 'Bases de Datos'],
        ]);   
    }
}

