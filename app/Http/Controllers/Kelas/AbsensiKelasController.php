<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\DaftarKelas;
use DB;
class AbsensiKelasController extends BaseController
{
    public function index(Request $request){

        $daftarKelas = DaftarKelas::with(['kelas.jadwal_pelajaran.absen'])->first();
        // ->whereHas('kelas.jadwal_pelajaran', function($query) use($request) {
        //     $query->where('id', '=', $request->session()->get('kelas_mapel'));
        // })->first();
        // ->where('kelas_id', $request->session()->get('kelas_id'))->get();
        dd($daftarKelas);
        return view('pages.kelas.absensikelas', [
            'daftar_kelas' => $daftarKelas
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}