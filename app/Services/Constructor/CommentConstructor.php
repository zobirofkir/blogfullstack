<?php
namespace App\Services\Constructor;

use App\Http\Requests\CommentRequest;

interface CommentConstructor
{
    public function get();
    public function post(CommentRequest $request);
}