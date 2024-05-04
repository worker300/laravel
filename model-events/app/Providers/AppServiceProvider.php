<?php

namespace App\Providers;

use App\Models\post;
use App\Models\user;
use App\Observers\postobserver;
use App\Observers\userobserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        user::observe(userobserver::class);
        post::observe(postobserver::class);
    }
}
