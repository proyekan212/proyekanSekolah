<?php

namespace App\Providers;

use App\Model\Menu;
use App\Model\MenuKelas;

use View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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
        View::composer('pages/kelas/*', function ($view) {
            $menu = MenuKelas::all();
            $view->with('menu', $menu);
        });
        View::composer('pages/teacher.*', function ($view) {
            $menu = Menu::all();
            $view->with('menu', $menu);
        });
        View::composer('dashboard', function ($view) {
            $menu = Menu::all();
            $view->with('menu', $menu);
        });
        View::composer('profile', function ($view) {
            $menu = Menu::all();
            $view->with('menu', $menu);
        });
    }
}
