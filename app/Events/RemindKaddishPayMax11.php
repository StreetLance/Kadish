<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RemindKaddishPayMax11
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $Email;
    public $Lang;
    public $name;
    public $Fname ;

    public function __construct($email,$lang,$name,$Fname)
    {
        $this->Email = $email;
        $this->Lang = $lang;
        $this->name = $name;
        $this->Fname = $Fname;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
