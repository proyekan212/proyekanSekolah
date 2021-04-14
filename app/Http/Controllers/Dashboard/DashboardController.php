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
use App\Model\User;
use App\Model\UserDetail;

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
        $user_detail = UserDetail::where('user_id', $request->user()->id)->first();
        $daftarKelas = DaftarKelas::with(['kelas', 'user_detail'])
        ->where('user_id', $user_detail->id)->first();
        // dd($daftarKelas);


        // untuk guru
        $kelas = Kelas::with(['jadwal_pelajaran'=> function($q) use($request) {
            $q->where('user_id', '=', $request->user()->id);
        }])->get();
        return view('dashboard', [
            'showSemester'      => $semester,
            'showMataPelajaran' => $mapel,
            'daftarKelas' => $daftarKelas,
            'kelas' => $kelas,
            'user' => $user,
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
