<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts =
    [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aku",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam qui quia rerum repudiandae repellat quisquam incidunt dolores autem. Magnam vero, eligendi voluptatum natus ab, molestias autem maiores eaque odit dignissimos praesentium quia ratione consequuntur, minima tenetur. Molestiae alias perspiciatis ipsam, exercitationem asperiores quas neque dolorum maiores harum dolor consequuntur minima quis voluptate rerum vero nostrum at reprehenderit accusamus vitae voluptas explicabo pariatur hic. Quo ratione laborum, commodi odio nostrum, numquam voluptates vero est quia iure porro possimus officiis natus ipsa."
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kamu",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, eum necessitatibus natus delectus excepturi quod iusto debitis mollitia molestiae atque maiores nostrum libero recusandae laborum consequatur unde voluptatem asperiores quam perspiciatis? Molestias repellat quasi rerum eveniet omnis expedita ad perferendis animi, quo veniam nihil corporis reiciendis alias, vel tenetur enim. Error voluptatum optio explicabo voluptates voluptatem architecto, qui veniam doloribus quo, consequatur odio velit distinctio aliquid vero iste deleniti? Tempora."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] == $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
