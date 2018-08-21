<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Post;
/**
 * Class PostRepository.
 */
class PostRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Post::class;
    }
}
