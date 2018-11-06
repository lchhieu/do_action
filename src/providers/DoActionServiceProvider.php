<?php

namespace Lchhieu\DoAction\Providers;

use Illuminate\Support\ServiceProvider;
use Lchhieu\DoAction\Hooks\Actions;
use Lchhieu\DoAction\Hooks\Filters;

class DoActionServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('actions', function ($app) {
            return new Actions();
        });

        $this->app->singleton('filters', function ($app) {
            return new Filters();
        });
    }
}
