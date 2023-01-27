<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    public function definition(): array
    {
        return [
            'active_settings' => true,
            'settings_order' => 0,
            'site_title' => 'Laravel',
            'site_description' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
            'site_keywords' => 'laravel, php, framework, web, application, development',
            'site_author' => 'Laravel',
            'site_email' => 'admin@admin.com',
            'site_phone' => '+1 123 456 789',
            'site_address' => '1234 Main St, Anytown, CA 12345',
            'site_facebook' => 'https://www.facebook.com/laravel',
            'site_twitter' => 'https://www.twitter.com/laravel',
            'site_instagram' => 'https://www.instagram.com/laravel',
            'site_linkedin' => 'https://www.linkedin.com/laravel',

        ];
    }
}
