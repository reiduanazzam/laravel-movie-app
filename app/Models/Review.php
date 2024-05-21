<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'Jojo Bizarre Adventure',
            'user' => 'Danish',
            'rating' => '5/10',
            'date' => '03/03/2024',
        ],

        [
            'id' => 2,
            'movie' => 'Noragami',
            'user' => 'Fahmi',
            'rating' => '6/10',
            'date' => '12/04/2024',
        ],
        
        [
            'id' => 3,
            'movie' => 'Wind Breaker',
            'user' => 'Zidan',
            'rating' => '7/10',
            'date' => '21/05/2024',
        ],

        [
            'id' => 4,
            'movie' => 'Spy X Family',
            'user' => 'Malik',
            'rating' => '8,5/10',
            'date' => '21/04/2024',
        ],

        [
            'id' => 5,
            'movie' => 'Suzume',
            'user' => 'Norris',
            'rating' => '7,9/10',
            'date' => '23/02/2024',
        ],
    ];

    public function getAllReview()
    {
        return $this-> reviews;
}
}
