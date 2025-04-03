<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar etiquetas de ejemplo
        DB::table('tags')->insert([
            ['name' => 'PHP'],
            ['name' => 'Laravel'],
            ['name' => 'Vue.js'],
            ['name' => 'JavaScript'],
            ['name' => 'React'],
            ['name' => 'CSS'],
            ['name' => 'Web Development'],
            ['name' => 'SEO'],
            ['name' => 'Blockchain'],
        ]);
    }
}
