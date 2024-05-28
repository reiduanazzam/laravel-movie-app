<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => 1,
            'user' => 'Danish',
            'rating' => '5/10',
            'date' => '03/03/2024',
        ]);
    
        Review::create([
            'id' => 2,
            'movie_id' => 2,
            'user' => 'Fahmi',
            'rating' => '6/10',
            'date' => '12/04/2024',
        ]);
    
        Review::create([
            'id' => 3,
            'movie_id' => 3,
            'user' => 'Zidan',
            'rating' => '7/10',
            'date' => '21/05/2024',
        ]);

        Review::create([
            'id' => 4,
            'movie_id' => 4,
            'user' => 'Fayad',
            'rating' => '9/10',
            'date' => '20/03/2024',
        ]);

        Review::create([
            'id' => 5,
            'movie_id' => 5,
            'user' => 'Topik',
            'rating' => '8/10',
            'date' => '29/03/2024',
        ]);
    }
}
