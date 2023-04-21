<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PostInterface;
use App\Models\Post;

class PostRepository extends BaseRepository implements PostInterface
{
    public function all()
    {
        return Post::all();
    }

    public function getAllIfUserContainPost($user)
    {
        if (!$this->isUserHasPermission($user, 'posts.select')){
            return "You do not have permission to view posts";
        }

        if ($user->posts()->exists()) {
            return $this->all();
        }
        return;
    }

}
