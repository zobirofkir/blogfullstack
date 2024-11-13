<?php
namespace  App\Services\Constructor;

use App\Http\Requests\NewsLetterRequest;

interface NewsLetterConstructor
{
    public function post(NewsLetterRequest $request);
}