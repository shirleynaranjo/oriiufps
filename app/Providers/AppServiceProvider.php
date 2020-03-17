<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $baseUrl = env('DESERT_EBS_BASE_URL');

        $this->app->singleton('GuzzleHttp\Client', function() use ($baseUrl) {
            return new Client([
                'base_uri' => $baseUrl,
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //FECHAS
        Carbon::setlocale('es');
        setlocale(LC_TIME,'es_ES.utf8');

        view()->share('theme', 'ufps');
    }
}
