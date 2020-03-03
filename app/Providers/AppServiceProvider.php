<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
