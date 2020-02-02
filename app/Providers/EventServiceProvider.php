<?php

namespace App\Providers;

use App\Events\RemindKaddishPayMin11;
use App\Events\RemindKaddishPayMax11;
use App\Events\RemindKaddishMax11;
use App\Events\RemindKaddishMin11;
use App\Listeners\SendThankyouMailMin11;
use App\Listeners\SendThankyouMailMax11;
use App\Listeners\SendThankyouMailPayMax11;
use App\Listeners\SendThankyouMailPayMin11;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        RemindKaddishPayMin11::class => [SendThankyouMailPayMin11::class],
        RemindKaddishPayMax11::class => [SendThankyouMailPayMax11::class],
        RemindKaddishMax11::class => [SendThankyouMailMax11::class],
        RemindKaddishMin11::class => [SendThankyouMailMin11::class],
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
