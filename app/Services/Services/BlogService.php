<?php
namespace App\Services\Services;

use App\Models\Blog;
use App\Models\Category;
use App\Services\Constructor\BlogConstructor;

class BlogService implements BlogConstructor
{
    public function get()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        
        $categories = Category::orderBy('created_at', 'desc')->limit(10)->get();
        
        return [
            'blogs' => $blogs,
            'categories' => $categories
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