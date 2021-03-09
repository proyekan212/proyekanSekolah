<?php

namespace App\Providers;

use App\Auth;
use App\Model\Menu;
use App\Model\MenuKelas;
use App\Model\MenuRole;
use App\Model\MenuRoleKelas;
use App\Model\User;
use App\Model\UserDetail;
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
            $user_role = UserDetail::where('user_id', $this->app->request->user()->id)->first();
            // dd($user_role->role_id);
            // $menu = MenuRole::where('role_id', $user_role)->get();
            $menu = MenuRoleKelas::where('role_id', 2)->get();
            // dd($menu);

            // dd($menu);
            $view->with('menu', $menu);
        });
        View::composer('pages/teacher.*', function ($view) {
            $menu = Menu::all();
            $view->with('menu', $menu);
        });
         View::composer('pages/admin.*', function ($view) {
            $role = UserDetail::where('user_id', $this->app->request->user()->id)->first();
            $menu = MenuRole::where('role_id', $role->role_id)->get();
            $view->with('menu', $menu);
        });
        View::composer('dashboard', function ($view) {
            // dd($this->app->request->user()->id);
            $role = UserDetail::where('user_id', $this->app->request->user()->id)->first();
            $menu = MenuRole::where('role_id', $role->role_id)->get();
            $view->with('menu', $menu);
        });
        View::composer('profile', function ($view) {
            $menu = Menu::all();
            $view->with('menu', $menu);
        });
    }
}
