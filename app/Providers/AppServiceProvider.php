<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
<<<<<<< Updated upstream

        view()->composer('*', function($view) {
            $view->with('user', User::where('id', auth()->user()->id)->firstOrFail());
            $view->with('payView', '\App\Http\Controllers\Helpers\PayViewController');
        });
=======
<<<<<<< Updated upstream
=======

        view()->composer('*', function($view) {
            if(auth()->user()) {
                $view->with('user', User::where('id', auth()->user()->id)->firstOrFail());
            }
            $view->with('payView', '\App\Http\Controllers\Helpers\PayViewController');
        });
>>>>>>> Stashed changes
>>>>>>> Stashed changes
    }
}
