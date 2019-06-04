<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped implements ShouldQueue, ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $content;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $content)
    {
        $this->user = $user;
        $this->content = $content;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return [
            new PrivateChannel('admin'),
            new PrivateChannel("users.{$this->user->id}"),
        ];
    }

    public function broadcastAs()
    {
        return 'orders.shipped';
    }
}
