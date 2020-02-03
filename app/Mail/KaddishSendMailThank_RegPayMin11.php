<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KaddishSendMailThank_RegPayMin11 extends Mailable
{
    use Queueable, SerializesModels;
    protected $name;
    protected $Fname;
    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $Fname, $data)
    {
        $this->name = $name;
        $this->Fname = $Fname;
        $this->data = $data;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view('mail.Thank_Reg_PayMin11')
            ->subject('Yarzeit Reminder')
            ->with([
                'name' => $this->name,
                'Fname' => $this->Fname,
                'data' => $this->data,
            ]);
    }
}
