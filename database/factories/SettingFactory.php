<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'settings_order' => 0,
            'active_settings' => true,
            'title' => 'Laravel',
            'description' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
            'img' => 'https://laravel.com/img/logomark.min.svg',
            'img_alt' => 'Laravel',
            'author' => 'Laravel',
            'about_paragraph' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
            'about_title' => 'About Laravel',
            'email' => 'admin@admin.com',
            'phone' => '+1 123 456 789',
            'address' => '1234 Main St, Anytown, CA 12345',
            'footer_about_title' => 'About Laravel',
            'footer_about_paragraph' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
            'social_media' => json_encode([
                'facebook' => 'facebook',
                'linkedin' => 'twitter',
                'github' => 'github',
                ])
        ];
    }
}
