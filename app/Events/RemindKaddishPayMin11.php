<?php

    namespace App\Events;

    use Illuminate\Broadcasting\Channel;
    use Illuminate\Broadcasting\InteractsWithSockets;
    use Illuminate\Broadcasting\PresenceChannel;
    use Illuminate\Broadcasting\PrivateChannel;
    use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
    use Illuminate\Foundation\Events\Dispatchable;
    use Illuminate\Queue\SerializesModels;

    class RemindKaddishPayMin11
    {
        use Dispatchable, InteractsWithSockets, SerializesModels;
        public $Email;
        public $Lang;
        public $name;
        public $Fname ;
        public $data;

        /**
         * Create a new event instance.
         *
         * @return void
         */
        public function __construct ( $email,$lang,$name,$Fname,$Data )
        {
            $this->Email = $email;
            $this->Lang = $lang;
            $this->name = $name;
            $this->Fname = $Fname;
            $this->data = $Data;
        }
    }
