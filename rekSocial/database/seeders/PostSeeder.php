<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Asegúrate de que existan al menos dos usuarios con IDs 1 y 2
        // antes de ejecutar este seeder.

        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'category_id' => 4,
                'title' => 'Innovacion',
                'content' => 'cotenido innovacion',
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmhJofnkqb_bxAyJHeascVxfLYJ84fxcONVA&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'category_id' => 9,
                'title' => 'Rekt EDitado',
                'content' => 'RekT! Editado',
                'image_url' => 'https://raw.githubusercontent.com/RektHQ/Assets/main/images/banner-1200-675.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'category_id' => 1,
                'title' => 'Mucho texto',
                'content' => 'Mucho texto Mucho texto Mucho texto Mucho texto Mucho texto Mucho texto Mucho texto Mucho texto Mucho texto Mucho texto Mucho texto Mucho texto',
                'image_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'category_id' => 2,
                'title' => 'Lorem Ipsum',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nostrum ipsum pariatur, optio aperiam, modi omnis tenetur explicabo iusto aliquam aspernatur? Asperiores culpa veritatis enim excepturi quo dolorum sunt, aspernatur voluptas aliquid sapiente dolores dignissimos odio sit explicabo nam magnam repellendus quod vero earum consequuntur corporis cum, blanditiis fuga esse! Pariatur dolores repudiandae odit sint delectus, vero culpa totam architecto aut iusto, qui assumenda deserunt voluptatem quisquam magni consequuntur labore perspiciatis. Nemo in, nulla fuga, excepturi eveniet architecto officiis sequi ratione omnis aut rem aspernatur iste iure officia tenetur ad cumque doloremque. Molestiae assumenda quo doloremque maiores inventore vero facere.',
                'image_url' => 'https://compote.slate.com/images/5294e6d0-53ed-4a4a-a350-7eaeab72ac93.jpeg?crop=1560%2C1040%2Cx0%2Cy0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}