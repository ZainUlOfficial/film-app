<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            ['name' => "Comedy"],
            ['name' => "Fantasy"],
            ['name' => "Crime"],
            ['name' => "Drama"],
            ['name' => "Music"],
            ['name' => "Adventure"],
            ['name' => "History"],
            ['name' => "Thriller"],
            ['name' => "Animation"],
            ['name' => "Family"],
            ['name' => "Mystery"],
            ['name' => "Biography"],
            ['name' => "Action"],
            ['name' => "Film-Noir"],
            ['name' => "Romance"],
            ['name' => "Sci-Fi"],
            ['name' => "War"],
            ['name' => "Western"],
            ['name' => "Horror"],
            ['name' => "Musical"],
            ['name' => "Sport"]
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }


        // Genre::factory(10)->create();
    }
}
