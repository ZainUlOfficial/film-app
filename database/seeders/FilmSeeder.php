<?php

namespace Database\Seeders;

use App\Models\Film;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Genre;
use Illuminate\Database\Seeder;


class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::factory(100)->create()->each(function($film) {
                $randomFields= Genre::all()->random( rand(0, 4) )->pluck('id');
                $film->genre()->attach($randomFields);
        });;
    }
}
