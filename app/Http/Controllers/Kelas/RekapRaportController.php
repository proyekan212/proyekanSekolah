<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use App\Model\DaftarKelas;
use App\Model\MasterPenilaianKeterampilan;
use App\Model\MasterSkemaKeterampilan;
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

        $skema_keterampilan = MasterSkemaKeterampilan::get();

        $keterampilan = MasterPenilaianKeterampilan::where('kelas_mapel_id', $request->session()->get('kelas_mapel') )
        ->get();
        
        // dd($keterampilan);s
        return view('pages.kelas.rekap_raport', 
            [
                'siswa' => $siswa,
                'keterampilan' => $keterampilan,
                'skema_keterampilan' => $skema_keterampilan
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
