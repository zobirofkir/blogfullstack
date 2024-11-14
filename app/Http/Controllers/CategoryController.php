<?php

namespace App\Http\Controllers;

use App\Services\Facades\CategoryFacade;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryFacade::get()['categories'];
        return view('pages.categories.categories-index', compact('categories'));
    }

    public function show($slug)
    {
        $category = CategoryFacade::show($slug)['category'];

        $blogs = CategoryFacade::show($slug)['blogs'];
        
        return view('pages.categories.categories-show', compact('category','blogs'));
    }
}
