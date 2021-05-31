<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\DaftarKelas;
use App\Model\MasterJadwalPelajaran;
use DB;
class AbsensiKelasController extends BaseController
{
    public function index(Request $request){
        // dd($request->session()->get('kelas_mapel'));
        $daftarKelas = DaftarKelas::with(['kelas.jadwal_pelajaran' => function($q) use ($request) {
            $q->where('id', '=',  $request->session()->get('kelas_mapel'));
        },'user_detail', 'absen'=> function($q) use($request) {
            $q->where('kelas_mapel_id', '=', $request->session()->get('kelas_mapel'));
        }])
        ->whereHas('kelas.jadwal_pelajaran', function($query) use($request) {
            $query->where('id', '=', $request->session()->get('kelas_mapel'));
        })
        ->where('kelas_id', $request->session()->get('kelas_id'))->get();
        // dd($daftarKelas);
        $kelas_mapel = MasterJadwalPelajaran::find($request->session()->get('kelas_mapel'));
        return view('pages.kelas.absensikelas', [
            'daftar_kelas' => $daftarKelas,
            'kelas_mapel' => $kelas_mapel
        ]);
        
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function monitor_aktifitas_siswa(Request $request)
    {
         $daftarKelas = DaftarKelas::with(['kelas.jadwal_pelajaran.absen', 'user_detail'])
        ->whereHas('kelas.jadwal_pelajaran', function($query) use($request) {
            $query->where('id', '=', $request->session()->get('kelas_mapel'));
        })
        ->where('kelas_id', $request->session()->get('kelas_id'))->get();
        
        

         return view('pages.kelas.monitor_aktifitas_siswa', [
          'daftar_kelas'   => $daftarKelas
        ]);
    }
}
