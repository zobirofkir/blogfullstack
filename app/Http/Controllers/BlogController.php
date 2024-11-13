<?php

namespace App\Http\Controllers;

use App\Services\Facades\BlogFacade;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = BlogFacade::get()['blogs'];

        $categories = BlogFacade::get()['categories'];
        
        return view('welcome', compact('blogs', 'categories'));
    }

    public function show($slug)
    {
        $blog = BlogFacade::show($slug)['blogs'][0];
        return view('pages.blogs.show', compact('blog'));
    }
}
