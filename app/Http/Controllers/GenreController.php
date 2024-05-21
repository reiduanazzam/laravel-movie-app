<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Metode untuk menampilkan semua genre
    public function genre()
    {
        $genreModel = new Genre();
        $genres = $genreModel->getAllGenre();

        return view('genre', ['genres' => $genres]);
    }
}
