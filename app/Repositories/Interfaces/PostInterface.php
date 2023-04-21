<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

// use App\Models\Post;

interface PostInterface
{
    public function all();
    public function getAllIfUserContainPost(User $user);
}
