<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'example_name',
            'email' => 'example@example.com',
            'password' => '12345678',
        ]);
        User::create([
            'id' => 2,
            'name' => 'example_name 2',
            'email' => 'example2@example2.com',
            'password' => '2222',
        ]);
        User::create([
            'id' => 3,
            'name' => 'example_name 3',
            'email' => 'example3@example3.com',
            'password' => '3333',
        ]);
        

    }
}
