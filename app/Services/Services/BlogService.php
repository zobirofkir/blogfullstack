<?php
namespace App\Services\Services;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use App\Services\Constructor\BlogConstructor;

class BlogService implements BlogConstructor
{
    public function get()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        
        /**
         * Filter Blogs By Categories
         */
        $categories = Category::orderBy('created_at', 'desc')->limit(10)->get();
        
        return [
            'blogs' => $blogs,
            'categories' => $categories
        ];
    }

    
    public function show($slug)
    {
        /**
         * Filter Blog By Slug
         */
        $blogs = Blog::where('slug', $slug)->first();

        /**
         * List All Related Blogs
         */
        $relatedBlogs = Blog::orderBy('created_at', 'desc')->get();

        /**
         * List All Tags 
         */
        $tags = Tag::orderBy('created_at', 'desc')->get();

        return [
            'blogs' => $blogs,
            'relatedBlogs' => $relatedBlogs,
            'tags' => $tags
        ];
    }

    public function getByTag($id)
    {

        /**
         * Filter Blogs By Tag Id
         */
        $tag = Tag::find($id);

        if ($tag) {
            $blogs = $tag->blogs()->orderBy('created_at', 'desc')->paginate(10);
            return [
                'blogs' => $blogs
            ];
        }

        return [
            'blogs' => []
        ];
    }

}