<?php

namespace App\Mail;

use App\Models\NewsLetter;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterSubscriptionConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $subscriber;

    public function __construct(NewsLetter $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    public function build()
    {
        return $this->subject('Newsletter Subscription Confirmation')
                    ->view('emails.newsletter.confirmation');
    }
}
