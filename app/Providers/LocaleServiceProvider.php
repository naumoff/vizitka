<?php

namespace App\Providers;

use App\Contracts\LocaleServiceInterface;
use App\Services\Translation\LocaleService;
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
        $this->app->bind(LocaleServiceInterface::class, LocaleService::class);
    }

    public function provides()
    {
        return [LocaleServiceInterface::class];
    }
}
