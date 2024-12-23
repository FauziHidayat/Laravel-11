<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {

        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Achmad Fauzi Hidayat',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam eveniet enim placeat
                ipsa aperiam adipisci
                voluptatibus eaque itaque incidunt, nostrum laudantium ratione. Delectus corporis ipsa repudiandae nemo
                dignissimos deserunt eos.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Achmad Fauzi Hidayat',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quod id earum ipsum
                expedita non unde optio labore assumenda sint, quas voluptate mollitia doloribus veniam debitis tempore
                nesciunt rem voluptatem!'
            ]
        ];
    }


    public static function find($slug): array
     {
    
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug); //memanggil method all() di class yang sama


        
        if(! $post){
            abort(404);
        }

        return $post;
    }
}