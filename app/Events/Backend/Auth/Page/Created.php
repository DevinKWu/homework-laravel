<?php

namespace App\Events\Backend\Page;

use Illuminate\Queue\SerializesModels;

/**
 * Class Created.
 */
class Created
{
    use SerializesModels;

    /**
     * @var
     */
    public $page;

    /**
     * @param $page
     */
    public function __construct($page)
    {
        $this->page = $page;
    }
}
