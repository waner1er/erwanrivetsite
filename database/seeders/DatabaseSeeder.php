<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\BlogCategory;
use App\Models\Images;
use App\Models\Page;
use App\Models\Post;
use App\Models\Setting;
use App\Models\User;
use Database\Factories\BlogCategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        BlogCategory::factory(10)->create();
        Post::factory(20)->create();
        Page::factory(6)->create();
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        Page::factory()->create([
            'ordering_number' => 1,
            'title' => 'Welcome',
            'slug' => 'welcome',
            'subtitle' => 'Welcome to my website',
            'introduction' => 'Welcome to my website',
            'content' => 'Welcome to my website',
            'is_home_page' => true,
            'is_active' => true,
            'thumbnail' => 'welcome.jpg',
            'thumbnail_alt' => 'Welcome',
        ]);

//        Page::factory()->create([
//            'title' => 'Languages et Frameworks',
//            'slug' => 'languages-et-frameworks',
//            'subtitle' => 'PHP - Javascript - Laravel - Vue.js - Wordpress',
//            'introduction' => 'mkzeùfoziefh',
//            'content' => 'zregretruyui',
//            'is_home_page' => false,
//            'is_active' => true,
//            'thumbnail' => 'dzaefrty',
//            'thumbnail_alt' => 'Languages et Frameworks',
//        ]);

        Setting::factory(1)->create();
    }
}
