<?php

namespace ZamanTech\Vod;

use Illuminate\Support\ServiceProvider;

class VodProvider extends ServiceProvider
{
    public function boot()
    {
//        $this->publishes([
//            // Can't locate path: </var/www/html/vendor/zaman-tech/sso/src/Providers/../config/zaman-tech.php>
//            __DIR__.'/config/zaman-tech.php' => config_path('zaman-tech.php')
//        ], 'zaman-tech-config');
    }

    public function register()
    {
        $this->app->bind('zaman-vod-sdk', function ($app) {
            return VodSdk::setToken(env('ARVAN_CLOUD_API_KEY'));
        });
        $vod = app('zaman-vod-sdk');
    }
}
