<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use App\Model\KompetensiDasar;
use App\Model\MasterPenilaianPengetahuan;
use Illuminate\Http\Request;

use App\Model\DaftarKelas;
use App\Model\MasterKompetensiInti;
use App\Model\MasterSkemaKeterampilan;
use App\Model\MasterSkemaPengetahuan;
use App\Model\StudentNotifications;
use App\Model\KompetensiDasarPerKelas;

class PenilaianPengetahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        
        // $kompetensi_dasar = MasterKompetensiInti::get();
           $kompetensi_dasar = KompetensiDasarPerKelas::where('kompetensi_inti_id', 1)->where('kelas_mapel_id',$request->session()->get('kelas_mapel'))->get();
        $DaftarKelas = DaftarKelas::where('kelas_id', $request->session()->get('kelas_id'))
        ->with(['kelas.jadwal_pelajaran' => function($q) use($request) {
            $q->where('id', $request->session()->get('kelas_mapel'));
        }, 'kelas.jadwal_pelajaran.penilaian_keterampilan'])
        ->get();
        $datas = MasterPenilaianPengetahuan::where([
            ['hapus', '=', '0'],
            ['kelas_mapel_id', $request->session()->get('kelas_mapel')]
        ])
        ->get();

        $skema = MasterSkemaKeterampilan::get();
        
        return view('pages.kelas.PenilaianKd3', [
            'kompetensi_dasar'=> $kompetensi_dasar,
            'datas'=> $datas,
            'daftar_kelas'=> $DaftarKelas,
            'skema' => $skema
        ]);

        // $kompetensi_dasars = KompetensiDasar::all();
        // $daftarKelas = DaftarKelas::where('kelas_id', $request->session()->get('kelas_id'));

        // $data = MasterPenilaianPengetahuan::where([
        //     ['hapus', '=', 0],
        //     ['kelas_mapel_id', '=', $request->session()->get('kelas_mapel')]
        // ])->get();
        // return view('pages.kelas.PenilaianKd3', [
        //     'kompetensi_dasars'=> $kompetensi_dasars,
        //     'data'=> $data,

        // ]);
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
           $siswas = DaftarKelas::where('kelas_id', $request->session()->get('kelas_id'))->get();
           foreach($siswas as $siswa ) {
               StudentNotifications::create([
                   'siswa_id' => $siswa->user_detail->user_id,
                   'guru_id' => $request->user()->id,
                   'descriptions' => 'tugas pengetahuan ',
                   'kelas_mapel_id' => $request->session()->get('kelas_mapel')

               ]);
           }
           MasterPenilaianPengetahuan::create([
            'pertemuan' => $request->pertemuan,
            'kelas_mapel_id' => $request->session()->get('kelas_mapel'),
            'skema_id' => $request->skema_penilaian,
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
        $skema = MasterSkemaPengetahuan::get();
        return view('pages.kelas.PenilaianKd3edit', [
            'kompetensi_dasars'=> $kompetensi_dasars,
            'datas'=> $data,
            'skema' => $skema
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
        'skema_id' => $request->skema_penilaian,
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
