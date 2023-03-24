<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

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
        //
        Paginator::useBootstrap();

        // gerbang untuk owner
        Gate::define('owner', function(User $user){
            // jika menggunakan code dibawah, artinya hanya email yang ditulis yang dianggap sebagai owner
            // return $user->email == 'hamzahsaifulmadjid@gmail.com';
            // jika menggunakan code dibawah, artinya jika di database dinyatakan sebagai owner, maka otomatis akan mendapatkan akses menjadi owner
            return $user->is_owner;
        });

        Gate::define('admin', function(User $user){
            return $user->is_admin;
        });
    }
}
