<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogCategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(rand(3, 8), true),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->realText(rand(100, 200)),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
