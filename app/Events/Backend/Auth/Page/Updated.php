<?php

namespace App\Events\Backend\Page;

use Illuminate\Queue\SerializesModels;

/**
 * Class Updated.
 */
class Updated
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
