<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        $host = $_SERVER['HTTP_HOST'] ?? request()->header('host');
        $isVercel = isset($_SERVER['VERCEL']) || (isset($_SERVER['HTTP_HOST']) && str_contains($_SERVER['HTTP_HOST'], 'vercel.app'));

        if ($isVercel || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) || app()->environment('production')) {
            URL::forceHttps();
            if ($host) {
                URL::forceRootUrl('https://' . $host);
                URL::useAssetOrigin('https://' . $host);
            }
        }
    }
}
