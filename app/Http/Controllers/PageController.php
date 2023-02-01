<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Page $page)
    {
        $welcomePage = $page->where('is_home_page', true)->firstOrFail();
        return view('pages.show', ['page' => $welcomePage]);
    }

    public function show($slug)
    {
        $page = \App\Models\Page::where('slug', $slug)->firstOrFail();
        if ($page->is_home_page) {
            return redirect()->route('pages.index');
        }
        return view('pages.show', compact('page'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
