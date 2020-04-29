<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SendMessage implements ShouldBroadcast

{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $mensaje;

    public function __construct($user, $mensaje)
    {
        $this->user = $user;
        $this->mensaje = $mensaje;

    }

    public function broadcastOn()
    {
        return 'chat1-channel';
    }
    public function broadcastAs()
    {
        return "chat1-event";
    }
}
