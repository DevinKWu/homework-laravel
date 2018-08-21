<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\PostCategory;
/**
 * Class PostCategoryRepository.
 */
class PostCategoryRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return PostCategory::class;
    }
}
