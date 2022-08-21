<?php

namespace App\Models;

class Post
{
    private static $blog_posts =[ 
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-posts-pertama",
            "author" => "yagyu munenori ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aut quas odio optio laboriosam, non nihil doloribus minus vitae maxime reprehenderit ea quos suscipit veritatis eos dicta laborum neque quod."
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-posts-kedua",
            "author" => "Beta Trident",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam consequuntur dolorum recusandae officia cumque adipisci ipsam? Dolorum dicta reprehenderit beatae sapiente fugit earum cumque delectus nesciunt minus officia debitis optio unde voluptatibus suscipit doloremque dolore eum quos animi, eligendi architecto reiciendis, libero iure, ullam quod! Vero at porro maiores aliquam voluptas fugiat quas ad et debitis sapiente facere placeat ut nobis obcaecati esse eaque, exercitationem laboriosam amet asperiores. Ipsum deleniti nostrum iste molestias vero non corporis laudantium quas ea eaque labore consequatur, temporibus nihil ducimus at laboriosam amet tempore quos cupiditate tenetur eos? Illum libero, dignissimos magnam fuga accusantium accusamus!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        //$post = [];
        //foreach($posts as $p) {
        //    if($p["slug"] === $slug) {
        //        $post = $p;
        //    }
        //}

        return $posts->firstWhere('slug', $slug);
    }
}
