<?php

namespace App\Providers;

use View;
use Illuminate\Support\Facades\Schema;
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
        //Forcing SSL
        If (env('APP_ENV') !== 'local') {
           $this->app['request']->server->set('HTTPS', true);
        }

        //Schema Default String Length
        Schema::defaultStringLength(191);

        //Sharing to All Views
        View::share([
            'pF' => pF(),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
