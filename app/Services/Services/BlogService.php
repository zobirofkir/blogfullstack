<?php
namespace App\Services\Services;

use App\Models\Blog;
use App\Services\Constructor\BlogConstructor;

class BlogService implements BlogConstructor
{
    public function get()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->limit(10)->get();
        return [
            'blogs' => $blogs
        ];
    }

    
    public function show($slug)
    {
        $blogs = Blog::where('slug', $slug)->get();
        return [
            'blogs' => $blogs
        ];
    }
}