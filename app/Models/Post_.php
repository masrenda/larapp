<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_article = [
        [
            "title" => "Postingan pertama",
            "slug" => "postingan-1",
            "author" => "masren",
            "isi" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium ex animi sed nesciunt dolorum, culpa totam! Sed quas delectus quod!"
        ],
        [
            "title" => "Postingan Kedua",
            "slug" => "postingan-2",
            "author" => "masren",
            "isi" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium ex animi sed nesciunt dolorum, culpa totam! Sed quas delectus quod! olor sit amet consectetur, adipisicing elit. Laudantium ex animi sed nesciunt dolorum, culpa totam! Sed quas delectus quod!"
        ],
        [
            "title" => "Postingan Ketiga",
            "slug" => "postingan-3",
            "author" => "masren",
            "isi" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium ex animi sed nesciunt dolorum, culpa totam! Sed quas delectus quod! olor sit amet consectetur, adipisicing elit. Laudantium ex animi sed nesciunt dolorum, culpa totam! Sed quas delectus quod!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_article);
    }

    public static function find($slug)
    {
        $blogPost = static::all();
        return $blogPost->firstWhere('slug', $slug);
    }
}
