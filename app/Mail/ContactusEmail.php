<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactusEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_name;
    public $contact_email;
    public $contact_subject;
    public $contact_message;
    



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact_name,$contact_email,$contact_subject,$contact_message)
    {
        $this->contact_name = $contact_name;
        $this->contact_email = $contact_email;
        $this->contact_subject = $contact_subject;
        $this->contact_message = $contact_message;

        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('The Morgans Website Contact Form')->view('emails.contactus')
        ->with(['contact_name'=>$this->contact_name, 'contact_email'=> $this->contact_email,'contact_subject'=> $this->contact_subject,'contact_message'=>$this->contact_message]);
    }
}
