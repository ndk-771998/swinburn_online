<?php

namespace App\Providers;

use App\Events\PostDeletingByAdminEvent;
use App\Listeners\PostCreatedByAdminListener;
use App\Listeners\PostDeletingByAdminListener;
use App\Listeners\PostUpdatedByAdminListener;
use App\Listeners\ProductCreatedByAdminListener;
use App\Listeners\ProductUpdatedByAdminListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use VCComponent\Laravel\Post\Events\PostCreatedByAdminEvent;
use VCComponent\Laravel\Post\Events\PostUpdatedByAdminEvent;
use VCComponent\Laravel\Product\Events\ProductCreatedByAdminEvent;
use VCComponent\Laravel\Product\Events\ProductUpdatedByAdminEvent;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class                 => [
            SendEmailVerificationNotification::class,
        ],
        ProductCreatedByAdminEvent::class => [
            ProductCreatedByAdminListener::class,
        ],
        ProductUpdatedByAdminEvent::class => [
            ProductUpdatedByAdminListener::class,
        ],
        PostUpdatedByAdminEvent::class => [
            PostUpdatedByAdminListener::class,
        ],
        PostCreatedByAdminEvent::class => [
            PostCreatedByAdminListener::class,
        ],
        PostDeletingByAdminEvent::class => [
            PostDeletingByAdminListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
