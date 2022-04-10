<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

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
        //1
        // View::share('site','blablabla');

        //2
        // View::composer(['yourReal','layouts.app'],function($view)
        // {
        //     // $user = Auth::user();
        //     $view->with('lina','lina');
        // });

        //3
        View::composer(['yourReal','layouts.app','edit','AddDesire'],'App\Http\ViewComposers\VarComposer');

    }
}
