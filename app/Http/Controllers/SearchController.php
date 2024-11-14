<?php

namespace App\Http\Controllers;

use App\Services\Facades\SearchFacade;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $title = $request->input('title');
        $blogs = SearchFacade::search($title);
        return view('pages.search.search', compact('blogs'));
    }
}
