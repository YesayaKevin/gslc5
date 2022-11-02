<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "title" => "Index"
    ]);
});

Route::get('/identity', function () {
    return view('identity', [
        "title" => "Identity",
        "name" => "Yesaya Kevinedo Delroyvitto",
        "email" => "yesaya.delroyvitto@binus.ac.id",
        "address" => "Komplek Centre Park Blok F no 1, Taman Baloi, Batam Kota."
    ]);
});


Route::get('/articles', function () {
    $blog_posts = [[
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yesaya Kevinedo Delroyvitto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate. cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate."
        ],[
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yesaya Kevinedo Delroyvitto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate."
        ],
    ];

    return view('articles', [
        "title" => "Articles",
        "name" => "Yesaya Kevinedo Delroyvitto",
        "posts" => $blog_posts
    ]);
});

// Halaman single
Route::get('posts/{slug}', function($slug){
    $blog_posts = [[
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yesaya Kevinedo Delroyvitto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate. cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate."
        ],[
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Yesaya Kevinedo Delroyvitto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione nisi atque amet, eum id, dolorum sapiente accusamus eius culpa consequatur cupiditate aperiam sed dolor temporibus alias excepturi recusandae cumque voluptate."
        ],
    ];

    foreach ($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});