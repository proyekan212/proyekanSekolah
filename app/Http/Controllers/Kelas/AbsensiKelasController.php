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

        $daftarKelas = DaftarKelas::where('kelas_id', $request->session()->get('kelas_id'))->get();
        return view('pages.kelas.absensikelas', [
            'daftar_kelas' => $daftarKelas
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
