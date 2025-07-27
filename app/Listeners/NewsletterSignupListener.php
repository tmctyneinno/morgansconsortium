<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\NewsletterSignupEvent;
use App\Mail\NewsletterSignupEmail;
use Illuminate\Support\Facades\Mail;

class NewsletterSignupListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(NewsletterSignupEvent $event)
    {
        $newsletter_signup_email = $event->newsletter_signup_email;
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new NewsletterSignupEmail($newsletter_signup_email));
    }
}
