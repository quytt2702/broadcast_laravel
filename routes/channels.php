<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may resgister all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('admin', \App\Broadcasting\AdminChannel::class);
Broadcast::channel('users.{id}', \App\Broadcasting\UserChannel::class);
