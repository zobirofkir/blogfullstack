<?php

namespace App\Http\Controllers;

use App\Services\Facades\BlogFacade;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = BlogFacade::get()['blogs'];
        $categories = BlogFacade::get()['categories'];
        return view('welcome', compact('blogs', 'categories'));
    }

}
