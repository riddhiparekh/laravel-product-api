<?php

namespace App\Repositories;

class BaseRepository
{
    protected function isUserHasPermission($user, $permission)
    {
        if ($user->permissions()->where('code', $permission)->count()) {
            return true;
        }
        return;
    }
}
