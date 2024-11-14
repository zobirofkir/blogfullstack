<?php

namespace App\Http\Controllers;

use App\Services\Facades\BlogFacade;
use App\Services\Facades\TagFacade;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($id)
    {
        /**
         * Get All Tags
         */
        $tags = TagFacade::show($id)['tags'];
        

        /**
         * List All Blogs By Tag
         */
        $blogs = BlogFacade::getByTag($id)['blogs'];

        return view("pages.tags.tags-show", compact('tags', 'blogs'));
    }
}
