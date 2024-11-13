<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsLetterRequest;
use App\Services\Facades\NewsLetterFacade;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function store(NewsLetterRequest $request)
    {
        return NewsLetterFacade::post($request);
    }
}
