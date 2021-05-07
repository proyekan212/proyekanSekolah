<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\DaftarKelas;
use App\Model\Kelas;
use App\Model\MasterJadwalPelajaran;
use App\Model\MasterKelas;
use App\Model\MasterSemester;
use Illuminate\Http\Request;
use App\Model\Menu;
use App\Model\SettingSemester;
use App\Model\User;
use App\Model\UserDetail;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $menu = Menu::all();

        // untuk siswa
        $mapel = MasterJadwalPelajaran::all();
        $semester = MasterSemester::all();
        $user = User::where('id', $request->user()->id)->first();
        $setting_semester = SettingSemester::first();
        $user_detail = UserDetail::where('user_id', $request->user()->id)->first();
        // dd($user_detail);
        $daftarKelas = DaftarKelas::with(['kelas' => function($q) {

        }, 'user_detail'])
        ->where('user_id', $user->user_detail->id )
        ->whereHas('kelas.tahun_akademik', function($q) use($setting_semester) {
            $q->where('id', $setting_semester->tahun_akademik->id);
        })
        ->first();
     

        
        // dd($user->user_detail->name);


        // untuk guru
        $kelas = Kelas::with(['jadwal_pelajaran'=> function($q) use($request, $setting_semester) {
            $q->where('user_id', '=', $request->user()->id);
            $q->where('semester_id' ,'=', $setting_semester->semester_id);
            
        }])
        ->where([
            ['tahun_akademik_id', '=', $setting_semester->tahun_akademik_id],
        ])
        ->get();
        return view('dashboard', [
            'showSemester'      => $semester,
            'showMataPelajaran' => $mapel,
            'setting_semester' => $setting_semester,
            'daftarKelas' => $daftarKelas,
            'kelas' => $kelas,
            'user' => $user,
            'user_detail' => $user_detail,
            // 'menu' => $menu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
