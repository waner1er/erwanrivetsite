<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => 'Contact',
            'slug' => 'contact',
            'subtitle' => 'Contactez-moi',
            'introduction' => 'Contactez-moi',
        ];
    }
}
