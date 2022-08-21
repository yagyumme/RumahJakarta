<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create ([
            'name' => 'Yagyu Munenori',
            'pnumber' => '085813217323',
            'email' => 'yagyumme@gmail.com',
            'username' => 'yagyumme',
            'password' => bcrypt('munenori123')
        ]);

        Category::create ([
            'name' => 'Dijual',
            'slug' => 'dijual'
        ]);

        Category::create ([
            'name' => 'Disewa',
            'slug' => 'disewa'
        ]);

       /*  Post::create ([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'Rumah Baru Full Furnish Kalideres',
            'slug' => 'rumah-baru-full-furnish-kalideres',
            'harga' => '2000000000',
            'daerah' => 'Kalideres',
            'area' => 'Jakarta Barat',
            'luastanah' => '140',
            'luasbangunan' => '180',
            'jktidur' => '4',
            'jkmandi' => '3',
            'jlantai' => '2',
            'hadap' => 'Selatan',
            'jcarport' => '1',
            'jgarasi' => '0',
            'sertifikat' => 'SHM',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dignissimos magnam repellat quod soluta consequatur laboriosam quasi pariatur voluptatibus debitis explicabo accusamus quam tenetur sapiente, dolorum nisi nulla deserunt totam, rerum facilis odio iure eum. Eos beatae dicta nisi, magnam earum accusamus sed deserunt, sunt cum quam corrupti perferendis animi velit dolore, officiis mollitia aut? Provident fugit itaque labore officia, voluptatum, quasi qui vero tempora, distinctio error magnam recusandae! Quia ipsam incidunt, corrupti expedita ratione quis eum placeat, autem cumque voluptatum porro voluptate dicta eius quod provident voluptas repudiandae perspiciatis at cupiditate. Labore tempora eaque saepe facere at quia ab deserunt aperiam quasi atque expedita, aliquam dolor veritatis voluptas asperiores laudantium nostrum, quod optio perferendis enim. Odit illo fuga vitae?',
        ]);

        Post::create ([
            'category_id' => 2,
            'user_id' => 1,
            'title' => 'Rumah Terawat Full Furnish Taman Palem',
            'slug' => 'rumah-terawat-full-furnish-taman-palem',
            'harga' => '100000000',
            'daerah' => 'Kalideres',
            'area' => 'Jakarta Barat',
            'luastanah' => '160',
            'luasbangunan' => '250',
            'jktidur' => '6',
            'jkmandi' => '4',
            'jlantai' => '3',
            'hadap' => 'Selatan',
            'jcarport' => '1',
            'jgarasi' => '0',
            'sertifikat' => 'SHM',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dignissimos magnam repellat quod soluta consequatur laboriosam quasi pariatur voluptatibus debitis explicabo accusamus quam tenetur sapiente, dolorum nisi nulla deserunt totam, rerum facilis odio iure eum. Eos beatae dicta nisi, magnam earum accusamus sed deserunt, sunt cum quam corrupti perferendis animi velit dolore, officiis mollitia aut? Provident fugit itaque labore officia, voluptatum, quasi qui vero tempora, distinctio error magnam recusandae! Quia ipsam incidunt, corrupti expedita ratione quis eum placeat, autem cumque voluptatum porro voluptate dicta eius quod provident voluptas repudiandae perspiciatis at cupiditate. Labore tempora eaque saepe facere at quia ab deserunt aperiam quasi atque expedita, aliquam dolor veritatis voluptas asperiores laudantium nostrum, quod optio perferendis enim. Odit illo fuga vitae?',
        ]); */

    }
}
