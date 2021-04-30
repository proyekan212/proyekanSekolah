<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use App\Model\DaftarKelas;
use App\Model\KompetensiDasar;
use App\Model\MasterPenilaianKeterampilan;
use App\Model\MasterPenilaianPengetahuan;
use App\Model\MasterSkemaKeterampilan;
use App\Model\MasterSkemaPengetahuan;
use Illuminate\Http\Request;

class RekapRaportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // dd($request->session()->get('kelas_mapel'));
        $siswa = DaftarKelas::where('kelas_id', $request->session()->get('kelas_id'))
        ->with(['kelas.jadwal_pelajaran' => function($q) use($request) {
            $q->where('id', $request->session()->get('kelas_mapel'));
        }, 'kelas.jadwal_pelajaran.penilaian_keterampilan'])
        ->get();
        
        // keterampilan
        $skema_keterampilan = MasterSkemaKeterampilan::get();
        $kompetensi_dasar_keterampilan = KompetensiDasar::where('kompetensi_inti_id', '2')->get();
        $keterampilan = MasterPenilaianKeterampilan::where('kelas_mapel_id', $request->session()->get('kelas_mapel') )
        ->get();
        

        //pengetahuan
        $skema_pengetahuan = MasterSkemaPengetahuan::get();
        $pengetahuan = MasterPenilaianPengetahuan::where('kelas_mapel_id', $request->session()->get('kelas_mapel'))
        ->get();
        $kompetensi_dasar_pengetahuan = KompetensiDasar::where('kompetensi_inti_id', '1')->get();
        // dd($keterampilan);s
        return view('pages.kelas.rekap_raport', 
            [
                'siswa' => $siswa,
                'keterampilan' => $keterampilan,
                'skema_keterampilan' => $skema_keterampilan,
                'kompetensi_dasar_keterampilan' => $kompetensi_dasar_keterampilan,
                'skema_pengetahuan' => $skema_pengetahuan,
                'pengetahuan' => $pengetahuan,
                'kompetensi_dasar_pengetahuan' => $kompetensi_dasar_pengetahuan
            ]
        );
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
