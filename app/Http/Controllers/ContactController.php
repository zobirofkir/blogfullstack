<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\Facades\ContactFacade;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contacts.contact');
    }
    public function store( ContactRequest $request )
    {
        ContactFacade::post($request);
        return redirect()->back();
    }
}
