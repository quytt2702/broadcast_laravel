<?php

namespace App\Broadcasting;

use App\User;

class AdminChannel
{
    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \App\User  $user
     * @return array|bool
     */
    public function join(User $user)
    {
        return $user->role_code === 1;
    }
}
