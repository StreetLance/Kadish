<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KaddishSendMailThank_RegMin11 extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $Fname;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $Fname)
    {
        $this->name = $name;
        $this->Fname = $Fname;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view('mail.Thank_Reg_Min11')
            ->subject('Notification !')
            ->with([
                'name' => $this->name,
                'Fname' => $this->Fname,
            ]);
    }
}
