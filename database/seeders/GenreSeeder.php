<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Shounen',
            'description' => 'Shōnen manga is an editorial category of Japanese comics targeting an audience of adolescent boys.',
        ]);
    
        Genre::create([
            'name' => 'Drama',
            'description' => 'Drama is a captivating literary genre that is brought to life through performance.',
        ]);
    
        Genre::create([
            'name' => 'School',
            'description' => 'It focuses on school students and is closely related to other genres such as slice of life, action, comedy, and especially romance.',
        ]);

        Genre::create([
            'name' => 'Comedy',
            'description' => 'Corrupt politicians, frenzied nationalists and other seditious forces continue to jeopardize the thin veneer of peace.',
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'A modern action adventure road story where a 17-year-old girl named Suzume helps a mysterious young man close doors from the other side that are releasing disasters all over in Japan.',
        ]);
    }
}
