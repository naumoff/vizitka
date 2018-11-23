<?php

namespace App\Providers;

use App\Services\Translation\LocaleService;
use App\Services\Translation\LocaleServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class LocaleServiceProvider extends ServiceProvider
{

    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(LocaleService::class, function ($app) {
            return new LocaleService(request());
        });
    }

    public function provides()
    {
        return [LocaleService::class];
    }
}
