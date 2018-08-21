<?php

namespace App\Repositories\Backend;

use App\Repositories\BaseRepository;
use App\Models\Page;
/**
 * Class PageRepository.
 */
class PageRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Page::class;
    }
}
