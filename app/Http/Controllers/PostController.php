<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = BlogCategory::all();
        return view('posts.index', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function category(BlogCategory $category)
    {
        return view('posts.category.show', [
            'category' => $category,
        ]);
    }
}
