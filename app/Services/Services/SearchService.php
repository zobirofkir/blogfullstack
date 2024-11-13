<?php
namespace App\Services\Services;

use App\Models\Blog;
use App\Services\Constructor\SearchConstructor;

class SearchService implements SearchConstructor
{
    public function search($title)
    {
        return Blog::where('title', 'like', '%' . $title . '%')->paginate(10);
    }
}