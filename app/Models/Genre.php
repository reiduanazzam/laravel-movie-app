<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'description' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
            
        ],
        [
            'id' => 2,
            'title' => 'Noragami',
            'description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
           
        ], 
        [
            'id' => 3,
            'title' => 'Wind Breaker',
            'description' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
          
        ],
        [
            'id' => 4,
            'title' => 'Spy X Family',
            'description' => 'Corrupt politicians, frenzied nationalists and other seditious forces continue to jeopardize the thin veneer of peace.',
          
        ],
        [
            'id' => 5,
            'title' => 'Suzume',
            'description' => 'A modern action adventure road story where a 17-year-old girl named Suzume helps a mysterious young man close doors from the other side that are releasing disasters all over in Japan',
          
        ],
    ];

    public function getAllGenre()
    {
        return $this-> genres;
}
}
