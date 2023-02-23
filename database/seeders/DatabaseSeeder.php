<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use App\Models\BlogCategory;
use App\Models\Message;
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
        Page::factory()->create([
            'ordering_number' => 2,
            'title' => 'A propos de moi',
            'slug' => 'a-propos',
            'subtitle' => 'un peu de moi',
            'introduction' => 'ùoqzhegùoiqhzeg fbzeqgbh',
            'content' => 'Welcome to my website',
            'is_home_page' => false,
            'is_active' => true,
            'thumbnail' => '',
            'thumbnail_alt' => 'Welcome',
        ]);
        Page::factory()->create([
            'ordering_number' => 3,
            'title' => 'Développeur web',
            'slug' => 'developpeur-web',
            'subtitle' => 'languages et frameworks',
            'introduction' => 'description de mes compétences',
            'content' => 'blabla bla php, blalbal js, blabla laravel ... ',
            'is_home_page' => false,
            'is_active' => true,
            'thumbnail' => '',
            'thumbnail_alt' => 'Welcome',
        ]);
        Page::factory()->create([
            'ordering_number' => 4,
            'title' => 'Passions et hobbies',
            'slug' => 'passions-et-hobbies',
            'subtitle' => 'musique, jeux videos retro, ...',
            'introduction' => 'description de mes passions et hobbies',
            'content' => 'blabla bla punk rock, blalbal jeux videos, blabla ... ',
            'is_home_page' => false,
            'is_active' => true,
            'thumbnail' => '',
            'thumbnail_alt' => 'Welcome',
        ]);


        Setting::factory(1)->create();
        Message::factory(10)->create();
        Contact::factory(1)->create();
        Message::factory(10)->create();
    }
}
