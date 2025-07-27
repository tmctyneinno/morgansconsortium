<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\ContactusEvent;
use App\Mail\ContactusEmail;
use Illuminate\Support\Facades\Mail;

class ContactusListener
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
    public function handle(ContactusEvent $event)
    {
        $contact_name = $event->contact_name;
        $contact_email = $event->contact_email;
        $contact_subject = $event->contact_subject;
        $contact_message = $event->contact_message;
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactusEmail($contact_name,$contact_email,$contact_subject,$contact_message));

    }
}
