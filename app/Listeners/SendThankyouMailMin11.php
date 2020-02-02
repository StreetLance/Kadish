<?php

namespace App\Listeners;

use App\Mail\KaddishSendMailThank_RegMin11;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
//use App\Mail;
    use Config;
use Illuminate\Support\Facades\Mail;

use App\Mail\KaddishSendMailThank_Reg;
class SendThankyouMailMin11
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
                Mail::to($event->Email)->locale($event->Lang)->send(new KaddishSendMailThank_RegMin11($event->name,$event->fname));
    }
}
