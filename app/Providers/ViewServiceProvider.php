<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\FakerComposer;
use App\Http\View\Composers\MenuComposer;

class ViewServiceProvider extends ServiceProvider
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
        View::composer("*", MenuComposer::class);
        View::composer('*', FakerComposer::class);
        // View::composer('*', 'App\Http\View\Composers\DarkModeComposer');
        // View::composer('*', 'App\Http\View\Composers\LoggedInUserComposer');
    }
}
