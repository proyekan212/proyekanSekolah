<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use App\Model\KompetensiDasar;
use App\Model\MasterPenilaianPengetahuan;
use Illuminate\Http\Request;

class PenilaianPengetahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $kompetensi_dasars = KompetensiDasar::all();
        $data = MasterPenilaianPengetahuan::where([
            ['hapus', '=', 0],
            ['kelas_mapel_id', '=', $request->session()->get('kelas_mapel')]
        ])->get();
        return view('pages.kelas.PenilaianKd3', [
            'kompetensi_dasars'=> $kompetensi_dasars,
            'data'=> $data,
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
        // dd($request->all());
        $data = $request->all();
        //    dd($data);
           
           MasterPenilaianPengetahuan::create([
            'pertemuan' => $request->pertemuan,
            'kelas_mapel_id' => $request->session()->get('kelas_mapel'),
            'skema_penilaian' => $request->skema_penilaian,
            'kompetensi_dasar_id' => $request->kompetensi_dasar_id,
            'penilaian_harian' => $request->penilaian_harian,
            'instruksi' => $request->instruksi,
            'mulai_pengerjaan' => $request->mulai_pengerjaan,
            'finish_pengerjaan' => $request->finish_pengerjaan
           ]);
    
           return redirect('kelas/penilaian_pengetahuan');
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
         $kompetensi_dasars = KompetensiDasar::all();
        $data = MasterPenilaianPengetahuan::findOrFail($id);
        return view('pages.kelas.PenilaianKd3edit', [
            'kompetensi_dasars'=> $kompetensi_dasars,
            'datas'=> $data,
        ]);
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
        // // dd($request->all());
        $data = $request->all();
        //    dd($data);
           
           MasterPenilaianPengetahuan::where('id', $id)->update([
              'pertemuan' => $request->pertemuan,
        'skema_penilaian' => $request->skema_penilaian,
        'kompetensi_dasar_id' => $request->kompetensi_dasar_id,
        'penilaian_harian' => $request->penilaian_harian,
        'instruksi' => $request->instruksi,
        'mulai_pengerjaan' => $request->mulai_pengerjaan,
        'finish_pengerjaan' => $request->finish_pengerjaan
           ]);
    
           return redirect('kelas/penilaian_pengetahuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterPenilaianPengetahuan::where('id', $id)->update(['hapus'=> 1]);
        return redirect('kelas/penilaian_pengetahuan');
    }
}
