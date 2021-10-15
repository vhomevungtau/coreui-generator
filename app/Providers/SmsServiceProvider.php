<?php

namespace App\Providers;

use App\Library\Service\Sms;
use Illuminate\Support\ServiceProvider;
use App\Library\Service\SmsServiceInterface;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Library\Services\SmsServiceInterface', function ($app) {
            return new Sms();
          });
    }
}
