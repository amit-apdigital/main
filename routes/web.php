<?php
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/tutorials', function () {
    return view('tutorials');
})->name('tutorials');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');


Route::get('/tutorials/videos', [VideoController::class, 'index'])->name('tutorials-videos');

Route::get('/logo', function () {
    return view('partials._logo');
})->name('logo');



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');