<?php

namespace App\Listeners;

use App\Events\SendMailEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyMailListener
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
     * @param  SendMailEvent  $event
     * @return void
     */
    public function handle($event)
    {
        $notify = [
            'name'     => $event->fullName,  'email' => $event->email, 
            'phone'    => $event->phone, 'state' => $event->state,  
            'business' => $event->business, 'industry' => $event->industry
        ];

        Mail::send('partials.email_notify',  $notify , function ($m) use($event) {
            $m->from('nhienle5@gmail.com', $event->fullName);
            $m->to('nhienle5@gmail.com')->subject('New customer information registration page Apply-Now');
        });
    }
}
