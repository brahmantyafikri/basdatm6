
<?php

use Illuminate\Support\Facades\Route;






// Rute untuk halaman Home
Route::get('/', function () {
    return view('index');
});

// Rute untuk halaman About
Route::get('/about', function () {
    return view('about');
});

// Rute untuk halaman Portfolio
Route::get('/portfolio', function () {
    return view('portfolio');
});

// Rute untuk halaman Blog
Route::get('/blog', function () {
    return view('blog');
});

// Rute untuk halaman Contact
Route::get('/contact', function () {
    return view('contact');
});

