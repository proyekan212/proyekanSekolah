<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use App\Model\KompetensiDasar;
use App\Model\MasterPenilaianKeterampilan;
use Illuminate\Http\Request;
use App\Model\DaftarKelas;
use App\Model\MasterSkemaKeterampilan;

class PenilaianKeterampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $DaftarKelas = DaftarKelas::with('kelas.jadwal_pelajaran.penilaian_keterampilan')
        // ->
        // where([
        //     ['kelas_id', '=', $request->session()->get('kelas_id')],
        // ])
        // ->whereHas('kelas.jadwal_pelajaran', function($q ) use ($request) {
        //     $q->where('id', $request->session()->get('kelas_mapel'));
        //  })
        // ->get();

        // dd( $request->session()->get('kelas_mapel'));
        $DaftarKelas = DaftarKelas::where('kelas_id', $request->session()->get('kelas_id'))
        ->with(['kelas.jadwal_pelajaran' => function($q) use($request) {
            $q->where('id', $request->session()->get('kelas_mapel'));
        }, 'kelas.jadwal_pelajaran.penilaian_keterampilan'])
        ->get();
        $kompetensi_dasar = KompetensiDasar::where('kompetensi_inti_id', 2)->get();
        $skema = MasterSkemaKeterampilan::get();
        $datas = MasterPenilaianKeterampilan::with(['jadwal_pelajaran.kelas.daftar_kelas'])->where('kelas_mapel_id', $request->session()->get('kelas_mapel'))->get();
        
        return view('pages.kelas.PenilaianKd4', [
            'kompetensi_dasar'=> $kompetensi_dasar,
            'datas'=> $datas,
            'daftar_kelas' => $DaftarKelas,
            'skema' => $skema
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

        $rules = [
            'mulai_pengerjaan' => 'required',
            'skema_penilaian' => 'required',
            'kompetensi_dasar' => 'required',
            'finish_pengerjaan' => 'required',
            'nama_penilaian' => 'required'

        ];
        $request->validate($rules);
        $kompetensi_dasar = "";

       

        foreach($request->kompetensi_dasar as $row) {

            $kompetensi_dasar  .=  strval($row).',' ;
        }

        // dd($request->all());
        MasterPenilaianKeterampilan::create([
            'nama_penilaian'=> $request->input('nama_penilaian'),
            'skema_id' => $request->skema_penilaian,
            'kelas_mapel_id' => $request->session()->get('kelas_mapel'),
            'kompetensi_dasar'=>$kompetensi_dasar,
            'keterangan' => $request->keterangan,
            'mulai_pengerjaan' => $request->mulai_pengerjaan,
            'finish_pengerjaan' => $request->finish_pengerjaan
        ]);

        return redirect('kelas/penilaian_keterampilan');

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
        $kompetensi_dasar = KompetensiDasar::where('kompetensi_inti_id', 2)->get();
        $data = MasterPenilaianKeterampilan::findOrFail($id);
        
        return view('pages.kelas.PenilaianKd4edit', [
            'kompetensi_dasar'=> $kompetensi_dasar,
            'datas'=> $data
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
        $kompetensi_dasar = "";

        foreach($request->kompetensi_dasar as $row) {

            $kompetensi_dasar  .=  strval($row).',' ;
        }

       
        $input = MasterPenilaianKeterampilan::where('id', $id)->update([
             'nama_penilaian'=> $request->nama_penilaian,
            'skema' => $request->skema_penilaian,
            'kompetensi_dasar'=>$kompetensi_dasar,
            'keterangan' => $request->keterangan,
            'mulai_pengerjaan' => $request->mulai_pengerjaan,
            'finish_pengerjaan' => $request->finish_pengerjaan
        ]);
     
        return redirect('kelas/penilaian_keterampilan');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterPenilaianKeterampilan::where('id', $id)->update(['hapus' => 1]);
        return redirect('kelas/penilaian_keterampilan');
    }
}
