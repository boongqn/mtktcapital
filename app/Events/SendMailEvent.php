<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SendMailEvent extends Event
{
    use SerializesModels;

    public $email, $fullName;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($event)
    {   
        $this->email    = $event->email;
        $this->fullName = $event->full_name;

        $this->phone    = $event->phone;
        $this->state    = $event->state;
        $this->business = $event->business;
        $this->industry = $event->industry;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
