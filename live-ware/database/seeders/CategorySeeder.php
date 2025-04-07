<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Tecnología', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cocina', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Salud', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Educación', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Entretenimiento', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}