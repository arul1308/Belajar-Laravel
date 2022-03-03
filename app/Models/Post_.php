<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        
        [
            "tittle" => "Ini post pertama",
            "slug" => "judul-post-pertama",
            "author" => "fachrullian",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi enim officiis consequuntur natus voluptates possimus? Veritatis cupiditate qui incidunt veniam nisi nesciunt? Doloremque eum aspernatur laborum sunt. Illum optio illo culpa atque nemo, aut cupiditate ducimus quidem ad nam quo tempora veritatis quae. Aliquid dolorem asperiores, esse sint, magni voluptatem qui deserunt voluptas incidunt architecto laudantium dolore quos molestiae adipisci alias. Quisquam tempore nisi culpa repellendus, dolorem illum quam alias exercitationem sapiente eaque nostrum, a autem repellat quia reprehenderit natus."
        ],
        [
            "tittle" => "Ini post Second",
            "slug" => "judul-post-kedua",
            "author" => "Arul",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa rem molestiae sed facilis! Vitae aliquid iure, laborum nisi est, facilis optio, labore distinctio quo debitis ut enim itaque dicta dolorem rem expedita perspiciatis eius! Dicta optio asperiores incidunt odio blanditiis laboriosam, quod nihil voluptatum tenetur. Hic sapiente molestias in inventore facere vitae fugiat obcaecati officia deserunt animi, enim consequuntur tenetur accusamus est atque laboriosam magni iure delectus fuga. Suscipit tenetur animi optio corporis nihil deserunt illo enim fugit esse omnis, aliquam ducimus molestias ipsam! Accusamus nesciunt non aliquam illo quo molestiae ab, temporibus aliquid qui accusantium quibusdam distinctio quidem excepturi?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }

}