<?php
namespace App\Services\Constructor;

use App\Http\Requests\ContactRequest;

interface ContactConstructor
{
    public function post(ContactRequest $request);
}