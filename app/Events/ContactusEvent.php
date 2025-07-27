<?php

namespace App\Events;

// use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
// use Illuminate\Broadcasting\PresenceChannel;
// use Illuminate\Broadcasting\PrivateChannel;
// use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ContactusEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $contact_name;
    public $contact_email;
    public $contact_subject;
    public $contact_message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($contact_email,$contact_name,$contact_subject,$contact_message)
    {
        $this->contact_email = $contact_email;
        $this->contact_name = $contact_name;
        $this->contact_subject = $contact_subject;
        $this->contact_message = $contact_message;
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
