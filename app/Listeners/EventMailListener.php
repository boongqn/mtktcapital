<?php

namespace App\Listeners;

use App\Customer;
use App\Events\SendMailEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventMailListener
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
        Mail::send('partials.email_confirm', ['name' => $event->fullName], function ($m) use($event) {
            $m->from('exlaravel5@gmail.com', 'MTKT Capital');
            $m->to('nhienle5@gmail.com')->subject('MTKT Capital - Your Information Was Successfully Received');
        });
    }
}
