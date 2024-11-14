<?php
namespace App\Services\Services;

use App\Http\Requests\NewsLetterRequest;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterSubscriptionConfirmation;
use App\Models\NewsLetter;
use App\Services\Constructor\NewsLetterConstructor;

class NewsLetterService implements NewsLetterConstructor
{
    public function post(NewsLetterRequest $request)
    {
        $validated = $request->validated();

        $existingSubscriber = NewsLetter::where('email', $validated['email'])->first();
        
        if ($existingSubscriber) {
            return redirect()->back();
        }

        $subscriber = NewsLetter::create([
            'email' => $validated['email']
        ]);

        /**
         * Send Email To Subscribed User To Conferme Here Sunscription
         */
        Mail::to($subscriber->email)->send(new NewsletterSubscriptionConfirmation($subscriber));

        return redirect()->back();
    }
}
