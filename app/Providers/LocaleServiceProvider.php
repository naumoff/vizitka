<?php

namespace App\Providers;

use App\Contracts\LocaleServiceInterface;
use App\Services\Translation\LocaleService;
use Illuminate\Support\ServiceProvider;

class LocaleServiceProvider extends ServiceProvider
{
    /** @var bool $defer */
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot():void
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register():void
    {
        $this->app->bind(LocaleServiceInterface::class, LocaleService::class);
    }

    /**
     * needed for defer
     * @return array
     */
    public function provides(): array
    {
        return [LocaleServiceInterface::class];
    }
}
