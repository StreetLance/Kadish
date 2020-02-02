<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\KaddishSendMailThank_RegPayMin11;


class SendThankyouMailPayMin11
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
    public function handle($event)
    {
        Mail::to($event->Email)->locale($event->Lang)->send(new KaddishSendMailThank_RegPayMin11($event->name,$event->Fname,$event->data));
    }
}
