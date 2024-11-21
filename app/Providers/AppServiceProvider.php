<?php

namespace App\Providers;

use Carbon\Carbon;
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
        /*$date = '2023-07-21';
        // convert date to timezone carbon
        $dater = Carbon::parse($date)->locale('fr_FR')->isoFormat('LL');

        dd($dater);*/
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
