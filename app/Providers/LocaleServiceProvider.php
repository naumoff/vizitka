<?php

namespace App\Providers;

use App\Services\Locale\LocaleSetter;
use App\Services\Locale\LocaleSetterInterface;
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
        $this->app->singleton('App\Services\Locale\LocaleSetterInterface', function ($app) {
            return new LocaleSetter(request());
        });
    }
}
