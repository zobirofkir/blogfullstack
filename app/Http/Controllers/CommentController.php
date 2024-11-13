<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Services\Facades\CommentFacade;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = CommentFacade::get();
        return view('pages.blogs.show', compact('comments'));
    }

    public function store (CommentRequest $request)
    {
        CommentFacade::post($request);
        return redirect()->back();
    }
}
