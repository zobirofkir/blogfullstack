<?php

namespace App\Http\Controllers;

use App\Services\Facades\BlogFacade;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = BlogFacade::get()['blogs'];

        $categories = BlogFacade::get()['categories'];
        
        return view('pages.blogs.index', compact('blogs', 'categories'));
    }

    public function show($slug)
    {
        $blog = BlogFacade::show($slug)['blogs'];
        $relatedBlogs = BlogFacade::show($slug)['relatedBlogs'];
        return view('pages.blogs.show', compact('blog', 'relatedBlogs'));
    }
}
