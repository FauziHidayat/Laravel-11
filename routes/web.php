<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


// Penggunaan Route dan Kirim Data




Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Achmad Fauzi Hidayat', 'title' => 'About']);
});


Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});


//kirim data berdasarkan slug 
Route::get('/posts/{slug}', function ($slug) {

    $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
