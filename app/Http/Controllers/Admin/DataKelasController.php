<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Kelas;
use App\Model\MasterKelas;
use App\Model\RombelKelas;
use App\Model\TahunAkademik;
use Illuminate\Http\Request;

class DataKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tahun_akademik = TahunAkademik::where('hapus', 0)->get();
        $rombel = RombelKelas::where('hapus', 0)->get();
        $master_kelas = MasterKelas::where('hapus', 0)->get();
        $datas = Kelas::where('hapus', 0)->get();
        return view('pages.admin.datakelas', [
            'datas' => $datas,
            'tahun_akademik' => $tahun_akademik,
            'rombel' => $rombel,
            'master_kelas' => $master_kelas
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
        Kelas::create([
            'master_kelas_id' => $request->input('kelas'),
            'tahun_akademik_id' => $request->input('tahun_akademik'),
            'rombel_id'=> 1
        ]);

        return redirect('data_kelas');
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
