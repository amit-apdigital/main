<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/tutorials', function () {
    return view('tutorials');
});

Route::get('/tutorials/videos', function () {
    return view('tutorials.videos');
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
