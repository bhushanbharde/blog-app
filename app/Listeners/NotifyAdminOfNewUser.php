<?php

namespace App\Listeners;

use App\Events\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Queue\InteractsWithQueue;

class NotifyAdminOfNewUser implements ShouldQueue
{
    public int $tries = 3;
    public int $timeout = 120;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreated $event): void
    {
        echo "Notification sent to user<pre>";
        print_r($event->user);
    }
}
