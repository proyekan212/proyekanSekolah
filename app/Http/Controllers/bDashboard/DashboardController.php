<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\Menu;
use App\Model\MasterSemester;
use App\Model\UserDetail;
use App\Model\MasterJadwalPelajaran;
use DB;

class DashboardController extends BaseController
{
    public function dataGet(Request $request)
    {
        $user = $request->user();
        $user_id        = $user->id;
        $role_id        = $user->role_id;
        // get user data

        // get menu based on role_id
        // $menus = Dashboard::getMenu($role_id);

        // foreach($menus as $menu){
        //     if($menu->status == 3) $singles[] = $menu;
        //     if($menu->status == 2) $parents[] = $menu;
        //     if($menu->status == 1) $subs[]    = $menu;
        // }
        // unset($menus);
        // if(isset($singles)){
        // 	foreach($singles as $single){
        //     $menus[]  = [
        //         'parent_code' => $single->parent_code,
        //         'parent_icon' => $single->icon,
        //         'parent_name' => $single->name,
        //         'sub_menu'    => [],
        //     ];
        // 	}
        // }

        // foreach($parents as $parent){
        //     foreach($subs as $sub){
        //         if($parent->parent_code == $sub->parent_code){
        //             $childs[] = [
        //                 'sub_code' => $sub->code,
        //                 'sub_icon' => $sub->icon,
        //                 'sub_name' => $sub->name,
        //             ];
        //         }
        //     }

        //     $menus[]  = [
        //         'parent_code' => $parent->parent_code,
        //         'parent_icon' => $parent->icon,
        //         'parent_name' => $parent->name,
        //         'sub_menu'    => isset($childs) ? $childs : [],
        //     ];
        //     unset($childs);
        // }



        // session(['menus' => @$menus]);

        $menu = Menu::all();
        $mapel = MasterJadwalPelajaran::all();
        $semester = MasterSemester::all();
        return view('dashboard', [
            'showSemester'      => $semester,
            'showMataPelajaran' => $mapel,
            'menu' => $menu
        ]);
    }
    public function menu(Request $request)
    {
        $user = $request->user();
        $user_id        = $user->id;
        $role_id        = $user->role_id;
        // get user data

        $menu = Menu::all();

        dd($menu);
        // return view('dashboard',[
        //     // 'showSemester'      => MasterSemester::where('status',1)->first(),
        //     // 'showMataPelajaran' => MasterJadwalPelajaran::get(),
        //     'menu' => $menu
        // ]);
    }

    public function reg()
    {
        // dd('masuk_reg');
        $params = [
            'user' => 'admin@admin.com',
            'pass' => 'admin',
            'role' => '1'
        ];
        Auth::register($params);
        return 'ok';
        // return view('pages/dashboard');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
