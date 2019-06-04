<?php

namespace App\Broadcasting;

use App\User;

class UserChannel
{
    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \App\User  $user
     * @return array|bool
     */
    public function join(User $user, $id)
    {
        return $user->id == $id && $user->role_code == 2;
    }
}
