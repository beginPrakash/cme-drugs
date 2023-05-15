<?php

namespace App\Providers;

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
        view()->share('FRONT_THEME_PATH', url('public/front') );
        view()->share('ADMIN_THEME_PATH', url('public/backend') );
        view()->share('UPLOAD_PATH', url('public/uploads') );
    }
}
