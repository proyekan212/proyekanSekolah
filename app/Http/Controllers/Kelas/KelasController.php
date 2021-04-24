<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\Kelas;
use App\Model\MasterJadwalPelajaran;
use App\Model\MasterKelas;
use App\Model\User;
use DB;
class KelasController extends BaseController
{
    public function index(Request $request){
        

        // dd($request->all());
        $kelasMapel = MasterJadwalPelajaran::where('user_id', $request->user()->id)->first();
        // $request->session()->put('kelas_mapel', $kelasMapel->id);
        $request->session()->put('kelas_mapel', $request->input('kelas_mapel'));
        
        $request->session()->put('kelas_id', $request->input('kelas_id'));
        $kelas = Kelas::where('id', $request->session()->get('kelas_id'))->first();
        $user = User::where('id', $request->user()->id)->first();
        return view('pages.kelas.dashboard', [
            'kelas' => $kelas,
            'user' => $user
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

        $request->session()->put('kelas_mapel', $jadwalMapel->id);
        
        return redirect('dashboard');
    }
}
