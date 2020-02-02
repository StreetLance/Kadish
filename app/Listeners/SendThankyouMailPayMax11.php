<?php

namespace App\Listeners;

use App\Mail\KaddishSendMailThank_RegPayMax11;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\KaddishSendMailThank_RegMin11;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendThankyouMailPayMax11
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
        Mail::to($event->Email)->locale($event->Lang)->send(new KaddishSendMailThank_RegPayMax11($event->name,$event->Fname));

    }
}
