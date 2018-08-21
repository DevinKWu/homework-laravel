<?php

namespace App\Listeners\Backend;

/**
 * Class PageEventListener.
 */
class PageEventListener
{
    /**
     * @param $event
     */
    public function onCreated($event)
    {
        \Log::info('Page Created');
    }

    /**
     * @param $event
     */
    public function onUpdated($event)
    {
        \Log::info('Page Updated');
    }

    /**
     * @param $event
     */
    public function onDeleted($event)
    {
        \Log::info('Page Deleted');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     */
    public function subscribe($events)
    {
        $events->listen(
            \App\Events\Backend\Page\Created::class,
            'App\Listeners\Backend\PageEventListener@onCreated'
        );

        $events->listen(
            \App\Events\Backend\Page\Updated::class,
            'App\Listeners\Backend\PageEventListener@onUpdated'
        );

        $events->listen(
            \App\Events\Backend\Page\Deleted::class,
            'App\Listeners\Backend\PageEventListener@onDeleted'
        );
    }
}
