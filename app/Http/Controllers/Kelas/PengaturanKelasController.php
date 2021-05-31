<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use App\Model\BlockKelasMapel;
use App\Model\DaftarKelas;
use App\Model\MasterJadwalPelajaran;
use App\Model\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengaturanKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $siswa = DaftarKelas::where('kelas_id', $request->session()->get('kelas_id'))
        ->whereHas('kelas.jadwal_pelajaran', function($q) use ($request) {
            $q->where('id','=', $request->session()->get('kelas_mapel'));
        })
        ->with(['blocklist'])
        ->get();

        // dd($siswa);

        // dd($siswa);
        $data = MasterJadwalPelajaran::where('id', $request->session()->get('kelas_mapel'))->first();
       
        return view('pages.kelas.pengaturan_kelas',[
            'data' => $data,
            'siswa' =>$siswa
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

    /**s
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
        
        $siswa = $request->input('siswa');
        $unblock_siswa = $request->input('unblock_siswa');

        if($siswa){
           foreach($siswa  as $sw) {
                BlockKelasMapel::create([
                    'kelas_mapel_id' => $request->session()->get('kelas_mapel'),
                    'daftar_kelas_id' => $sw
                ]);
           }
        }

        if($unblock_siswa) {
            foreach($unblock_siswa as $sw) {
            BlockKelasMapel::where('id', $sw)->delete();
            }
        }
        MasterJadwalPelajaran::where('id', $id)->update([
            'kkm' => $request->input('kkm'),
            'pertemuan' => $request->input('pertemuan')
        ]);

        return redirect('kelas/pengaturan_kelas');
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

    public function absen(){

        dd("teest");
    }
}
