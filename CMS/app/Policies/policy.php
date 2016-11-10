<?php

namespace CRUX\Policies;

use CRUX\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class policy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
