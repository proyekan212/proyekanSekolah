<?php

namespace App\Providers;

use App\Auth;
use App\Model\Menu;
use App\Model\MenuKelas;
use App\Model\MenuRole;
use App\Model\MenuRoleKelas;
use App\Model\StudentNotifications;
use App\Model\TeacherNotifications;
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
            $menu = MenuKelas::with(['menu_role' => function($q) {
                // dd($q);
            $q->where('role_id', $this->app->request->user()->id);
        }])->orderBy('reorder' , 'asc')->get();
            // dd($menu);

            // dd($menu);
               $data_auth = UserDetail::where('role_id',$user_role->role_id)->where('user_id', '=', $this->app->request->user()->id)->first();
            $view->with('data_auth', $data_auth);
            $view->with('menu', $menu);
            $kelas_mapel_session = $this->app->request->session()->get('kelas_id');

            $view->with('kelas_mapel_session', $kelas_mapel_session);
        });

        View::composer('pages/teacher.*', function ($view) {
            $role = UserDetail::where('user_id', $this->app->request->user()->id)->first();
            $menu = Menu::all();
            $view->with('menu', $menu);
               $data_auth = UserDetail::where('role_id',$role->role_id)->where('user_id', '=', $this->app->request->user()->id)->first();
            $view->with('data_auth', $data_auth);
            $kelas_mapel_session = $this->app->request->session()->get('kelas_id');

            $view->with('kelas_mapel_session', $kelas_mapel_session);
        });
        View::composer('pages/admin.*', function ($view) {
            $role = UserDetail::where('user_id', $this->app->request->user()->id)->first();
            $menu = MenuRole::where('role_id', $role->role_id)->get();
               $data_auth = UserDetail::where('role_id',$role->role_id)->where('user_id', '=', $this->app->request->user()->id)->first();
            $view->with('data_auth', $data_auth);
            $view->with('menu', $menu);$kelas_mapel_session = $this->app->request->session()->get('kelas_id');

            $view->with('kelas_mapel_session', $kelas_mapel_session);
        });
        View::composer('dashboard', function ($view) {
            // dd($this->app->request->user()->id);
            $role = UserDetail::where('user_id', $this->app->request->user()->id)->first();
            $menu = MenuRole::where('role_id', $role->role_id)->get();
            $data_auth = UserDetail::where('role_id',$role->role_id)->where('user_id', '=', $this->app->request->user()->id)->first();
            $view->with('data_auth', $data_auth);
// dd($menu->menu_id);
$kelas_mapel_session = $this->app->request->session()->get('kelas_id');

            $view->with('kelas_mapel_session', $kelas_mapel_session);

            $view->with('menu', $menu);



        });

        View::composer('pages/student.*', function ($view) {
            // dd($this->app->request->user()->id);
            $role = UserDetail::where('user_id', $this->app->request->user()->id)->first();
            // $menu = MenuRole::where('role_id', $role->role_id)->get();
            $menu = MenuRoleKelas::where('menu_id', 8)->where('role_id', 3)->get();
            $data_auth = UserDetail::where('role_id',3)->where('user_id', '=', $this->app->request->user()->id)->first();
$kelas_mapel_session = $this->app->request->session()->get('kelas_mapel');
            $view->with('kelas_mapel_session', $kelas_mapel_session);

            $view->with('menu', $menu);
            $view->with('data_auth', $data_auth);
        });

        
        View::composer('pages/profile.*', function ($view) {
           // dd($this->app->request->user()->id);
            $role = UserDetail::where('user_id', $this->app->request->user()->id)->first();
            $menu = MenuRole::where('role_id', $role->role_id)->get();
               $data_auth = UserDetail::where('role_id',$role->role_id)->where('user_id', '=', $this->app->request->user()->id)->first();
            $view->with('data_auth', $data_auth);
            $view->with('menu', $menu);
            $kelas_mapel_session = $this->app->request->session()->get('kelas_id');

            $view->with('kelas_mapel_session', $kelas_mapel_session);
        });


        View::composer('*', function($view) {
            $user = $this->app->request->user();
            $notifications = null;
            if($user != null) {
                if($user->user_detail->role_id == 3) {
                    $notifications = StudentNotifications::where('siswa_id', $user->id)->get();
                      
                }

                else if($user->user_detail->role_id == 2) {
                    $notifications = TeacherNotifications::where('guru_id', $user->id)->get();
                     
                }
                
                
            }

            $view->with('notifications', $notifications);
        });

    }
}
