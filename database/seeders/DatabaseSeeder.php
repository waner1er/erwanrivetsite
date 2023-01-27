<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Images;
use App\Models\Page;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        Page::factory()->create([
            'title' => 'Welcome',
            'slug' => 'welcome',
            'subtitle' => 'Welcome to my website',
            'introduction' => 'Welcome to my website',
            'content' => 'Welcome to my website',
            'is_home_page' => true,
            'thumbnail' => 'welcome.jpg',
            'thumbnail_alt' => 'Welcome',
        ]);

        Setting::factory(1)->create();
    }
}
