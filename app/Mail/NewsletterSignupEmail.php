<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterSignupEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $newsletter_signup;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newsletter_signup_email)
    {
        $this->newsletter_signup_email = $newsletter_signup_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Newsletter Email List Update')->view('emails.newsletter_signup')->with(['newsletter_signup_email'=> $this->newsletter_signup_email]);
    }
}
