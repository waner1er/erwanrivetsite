<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Page;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        if (Contact::count() === 0) {
            $page = new Contact([
                'title' => 'default contact title',
                'slug' => 'default contact slug',
                'subtitle' => 'default contact subtitle',
                'introduction' => 'default contact introduction',
            ]);

        } else {
            $page = Contact::firstOrFail();
        }

        return view('pages.contact', ['page' => $page]);
    }
}
