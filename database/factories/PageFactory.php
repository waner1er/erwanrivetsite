<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'subtitle' => fake()->sentence(),
            'thumbnail' => fake()->image(),
            'thumbnail_alt' => fake()->sentence(),
            'content' => fake()->paragraphs(3, true),
        ];
    }
}
