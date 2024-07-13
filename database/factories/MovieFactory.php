<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $autoIncrement = 1;
        // return [
        //     'title' => $this->faker->unique()->word,
        //     'image_url' => $this->faker->imageUrl(),
        //     'published_year' => $this->faker->year,
        //     'description' => $this->faker->realText(20),
        //     'is_showing' => $this->faker->boolean,
        // ];
        return [
            'id' => $autoIncrement++,
            'title' => $this->faker->realText(10),
            'image_url' => $this->faker->imageUrl(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
