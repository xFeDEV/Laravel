<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tags')->insert([
            ['name' => 'Seguridad'],
            ['name' => 'Deep Learning'],
            ['name' => 'Blockchain'],
            ['name' => 'Big Data'],
            ['name' => 'Machine Learning'],
            ['name' => 'Redes Neuronales'],
            ['name' => 'IoT'],
            ['name' => 'Ciberseguridad'],
            ['name' => 'Laravel'],
            ['name' => 'ReactJS'],
            ['name' => 'Node.js'],
            ['name' => 'Python'],
            ['name' => 'API REST'],
            ['name' => 'Docker'],
            ['name' => 'Kubernetes'],
            ['name' => 'CSS y Animaciones'],
            ['name' => 'Web Scraping'],
            ['name' => 'Criptografía Cuántica'],
            ['name' => 'Git y Versionado'],
        ]);
    }
}
