<?php

namespace App\Providers;

//use Illuminate\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;
use Gate;



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
        Gate::define('isManager', function ($user) {
            foreach ($user->roles as $role) {
                if ($role->id == 1) {
                    return 'isAdmin';
                } elseif ($role->id == 2) {
                    return 'isManager';
                }
            }
        });
    }
}
