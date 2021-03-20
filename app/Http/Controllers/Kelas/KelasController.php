<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\Kelas;
use App\Model\MasterJadwalPelajaran;
use App\Model\MasterKelas;
use DB;
class KelasController extends BaseController
{
    public function index(Request $request){
        
        $kelasMapel = MasterJadwalPelajaran::where('user_id', $request->user()->id)->first();
        $request->session()->put('kelas_mapel', $kelasMapel->id);
        
        $request->session()->put('kelas_id', $kelasMapel->kelas->id);
        $kelas = Kelas::where('id', $request->session()->get('kelas_id'))->first();
        return view('pages.kelas.dashboard', [
            'kelas' => $kelas
        ]);
    }


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show ($id) {
        return redirect('kelas');
    }

    public function store(Request $request) {
        $jadwalMapel = MasterJadwalPelajaran::create([
            'kelas_id' => $request->input('kelas_id'),
            'mapel_id' => 1,
            'kkm' => 75,
            'user_id' => $request->user()->id,
            
        ]);
        
        return redirect('dashboard');
    }
}
