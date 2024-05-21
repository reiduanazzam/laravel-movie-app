<?php
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', function () {
    return view('movies/index');
});

Route::get('/products', function () {
    return view('product');
});

Route::get('/genres', [GenreController::class, 'genre']);

Route::get('/review', [ReviewController::class, 'index']);