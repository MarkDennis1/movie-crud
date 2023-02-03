<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'poster_path' => 'https://m.media-amazon.com/images/I/71ZJ8am0mKL.jpg',
            'description' => $this->faker->paragraph(3),
            'date_published' => $this->faker->date()
        ];
    }
}
