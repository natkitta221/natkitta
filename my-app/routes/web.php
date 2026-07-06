<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about2', function () {
    $name = "Natkitta Kingchaiyaphum" ;
    $date = "6 กรกฎาคม 2026";
    return view('about2', compact('name' , 'date'));
})->name("about2");

Route::get('/blog2', function () {
    $blog2 = [
        [
        'title' => 'บทความที่ 1',
        'content' => 'เนื้อหาบทความที่ 1',
        'status' => true 
        ],
        [
        'title' => 'บทความที่ 2',
        'content' => 'เนื้อหาบทความที่ 2',
        'status' => true 
        ],
        [
        'title' => 'บทความที่ 3',
        'content' => 'เนื้อหาบทความที่ 3',
        'status' => false 
        ],
    ];
    return view("blog2", compact('blog2'));
    })->name("blog2");
