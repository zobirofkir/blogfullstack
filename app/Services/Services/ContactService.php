<?php
namespace App\Services\Services;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Services\Constructor\ContactConstructor;
use Illuminate\Support\Facades\Mail;

class ContactService implements ContactConstructor
{
    public function post(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        /**
         * Send Email To (MAIL_FROM_ADDRESS) exist in .env file
         */
        Mail::to(env("MAIL_FROM_ADDRESS"))->send(new ContactMail($contact));

        return [
            "contact" => $contact
        ];
    }
}