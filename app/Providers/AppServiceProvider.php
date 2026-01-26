<?php

namespace App\Providers;

use Fruitcake\LaravelDebugbar\ServiceProvider as DebugbarServiceProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (!$this->app->runningInConsole() && config('app.debug') && 'local' === config('app.env')) {
            $this->app->register(DebugbarServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
