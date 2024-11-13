<?php

namespace App\Providers;

use App\Services\Services\NewsLetterService;
use Illuminate\Support\ServiceProvider;

class NewsLetterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('NewsLetterService', function ($app) {
            return new NewsLetterService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
