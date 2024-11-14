<?php
namespace App\Services\Services;

use App\Models\Category;
use App\Services\Constructor\CategoryConstructor;

class CategoryService implements CategoryConstructor
{
    public function get()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(10);
        return [
            'categories' => $categories
        ];
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();

        $blogs = $category->blogs()->paginate(6);


        return [
            'category' => $category,
            'blogs' => $blogs
        ];
    }
}