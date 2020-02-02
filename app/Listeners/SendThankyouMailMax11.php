<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\KaddishSendMailThank_RegMax11;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendThankyouMailMax11
{
    protected $name;
    protected $Fname;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct($name, $Fname)
    {
        $this->name = $name;
        $this->Fname = $Fname;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to($event->Email)->locale($event->Lang)->send(new KaddishSendMailThank_RegMax11($event->name,$event->fname));
    }
}
