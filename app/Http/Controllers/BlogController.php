<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Services\Facades\BlogFacade;
use App\Services\Facades\TagFacade;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = BlogFacade::get()['blogs'];

        $categories = BlogFacade::get()['categories'];
        
        return view('pages.blogs.blogs-index', compact('blogs', 'categories'));
    }

    public function show($slug)
    {

        /**
         * Show Blog Detail Into blog-show
         */
        $blog = BlogFacade::show($slug)['blogs'];

        /**
         * List All Blogs Into blogs-show
         */
        $relatedBlogs = BlogFacade::show($slug)['relatedBlogs'];

        /**
         * Get All Tags Into blogs-show
         */
        $tags = TagFacade::get()['tags'];
        
        return view('pages.blogs.blogs-show', compact('blog', 'relatedBlogs', 'tags'));
    }
}
