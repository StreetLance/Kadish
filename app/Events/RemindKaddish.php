<?php

    namespace App\Events;

    use Illuminate\Broadcasting\Channel;
    use Illuminate\Broadcasting\InteractsWithSockets;
    use Illuminate\Broadcasting\PresenceChannel;
    use Illuminate\Broadcasting\PrivateChannel;
    use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
    use Illuminate\Foundation\Events\Dispatchable;
    use Illuminate\Queue\SerializesModels;

    class RemindKaddish
    {
        use Dispatchable, InteractsWithSockets, SerializesModels;
        public $Email;
        public $Lang;

        /**
         * Create a new event instance.
         *
         * @return void
         */
        public function __construct ( $email,$lang )
        {
            $this->Email = $email;
            $this->Lang = $lang;
        }
    }
