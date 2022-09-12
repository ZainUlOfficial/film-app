<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'release_date' => fake()->date(now()),
            'rating' => fake()->numberBetween(1, 5),
            'country' => fake()->country(),
            'photo' => fake()->imageUrl('800', '600', 'films'),
        ];



    }
}
