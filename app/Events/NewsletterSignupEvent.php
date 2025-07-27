<?php

namespace App\Events;

// use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
// use Illuminate\Broadcasting\PresenceChannel;
// use Illuminate\Broadcasting\PrivateChannel;
// use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class NewsletterSignupEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $newsletter_signup_email;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($newsletter_signup_email)
    {
        $this->newsletter_signup_email = $newsletter_signup_email;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    // public function broadcastOn()
    // {
    //     return new PrivateChannel('channel-name');
    // }
}
