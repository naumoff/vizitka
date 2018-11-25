<?php

namespace App\Providers;

use App\Services\Translation\TransKeyService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.app', 'controllers.front.*'], function ($view) {
            $view->with('_t', app(TransKeyService::class));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){}
}
