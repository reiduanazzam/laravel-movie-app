<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'id' => 1,
            'title' => 'Jojo Bizzare Adventure',
            'poster'=> 'movie-01.jpg',
            'genre' => 'Shounen',
            'synopsis' => 'Jojos Bizzare Adventure is a story about the Joestar family, who are possessed with intense psychic strength.'
        ],
        [
            'id' => 2,
            'title' => 'Noragami',
            'poster'=> 'movie-02.jpg',
            'genre' => 'Drama',
            'synopsis' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
        ],
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'poster'=> 'movie-03.jpg',
            'genre' => 'Action',
            'synopsis' => 'Haruka Sakura wants nothing to do with weaklings—he is only interested in the strongest of the strong.'
        ],
        [
            'id' => 4,
            'title' => 'Spy X Family',
            'poster'=> 'movie-04.jpg',
            'genre' => 'Comedy',
            'synopsis' => 'Corrupt politicians, frenzied nationalists and other seditious forces continue to jeopardize the thin veneer of peace.'
        ],
        [
            'id' => 5,
            'title' => 'Suzume',
            'poster'=> 'movie-05.jpg',
            'genre' => 'Drama',
            'synopsis' => 'A modern action adventure road story where a 17-year-old girl named Suzume helps a mysterious young man close doors from the other side that are releasing disasters all over in Japan.'
        ],
    ];
    
    public function getAllMovies()
    {
        return $this->movies;
    }
}
