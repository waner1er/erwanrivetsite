<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'subtitle' => $this->faker->sentence,
            'thumbnail' => $this->faker->imageUrl,
            'thumbnail_alt' => $this->faker->sentence,
            'introduction' => $this->faker->paragraph,
            'content' => $this->faker->paragraph,
        ];
    }
}
