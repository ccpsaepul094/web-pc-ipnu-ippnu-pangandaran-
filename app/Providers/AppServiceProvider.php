<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\View; // Ala
use Illuminate\Pagination\Paginator; // <--- ini yang penting


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
        // Setiap kali view 'admin.admin' dipanggil, jalankan logika ini
        View::composer('admin.admin', function ($view) {
            $view->with('totalUser', User::count());
            $view->with('totalAdmin', User::role('admin')->count());
            $view->with('totalContributor', User::role('user')->count());
        });
    }
}
