<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Kelas;
use Illuminate\Http\Request;
use App\Model\MasterJadwalPelajaran;
use App\Model\MasterMapel;
use DB;
use App\Model\SettingSemester;

class JadwalPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting_semester = SettingSemester::first();
        $datas = Kelas::with(['jadwal_pelajaran.master_mapel', 'jadwal_pelajaran.user.user_detail'])->whereHas('tahun_akademik', function($q) use($setting_semester) {
            $q->where('id', $setting_semester->tahun_akademik->id);
        })->get();
     
      return view('pages.admin.jadwalpelajaran', [
            // 'kompetensi_inti' => MasterJadwalPelajaran::all(),
        'datas' => $datas,
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
        MasterJadwalPelajaran::where('id', $id)->delete();

        return redirect('Jadwal_Pelajaran');
    }
}
