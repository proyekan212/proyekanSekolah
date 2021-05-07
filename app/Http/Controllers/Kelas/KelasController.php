<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\Kelas;
use App\Model\KompetensiDasar;
use App\Model\MasterJadwalPelajaran;
use App\Model\MasterKelas;
use App\Model\SettingSemester;
use App\Model\User;
use DB;
class KelasController extends BaseController
{
    public function index(Request $request){
        

        // dd($request->all());
        $kelasMapel = MasterJadwalPelajaran::where('user_id', $request->user()->id)->first();
        // $request->session()->put('kelas_mapel', $kelasMapel->id);
        $request->session()->put('kelas_mapel', $request->input('kelas_mapel'));
        $kompetensi_dasar = KompetensiDasar::
        with(['penilaian_pengetahuan' => function($q) use($request) {
            $q->where('kelas_mapel_id', $request->session()->get('kelas_mapel'));
        }, 'penilaian_keterampilan' => function($q) use($request) {
            $q->whereHas('penilaian_keterampilan', function($q1) use($request) {
                $q1->where('kelas_mapel_id', $request->session()->get('kelas_mapel'));
            });
        }])
        ->get();
        $request->session()->put('kelas_id', $request->input('kelas_id'));
        $kelas = Kelas::where('id', $request->session()->get('kelas_id'))->first();
        $user = User::where('id', $request->user()->id)->first();
        return view('pages.kelas.dashboard', [
            'kelas' => $kelas,
            'user' => $user,
            'kelas_mapel' =>$kelasMapel,
            'kompetensi_dasar' => $kompetensi_dasar
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
        $setting_semester = SettingSemester::first();
        $jadwalMapel = MasterJadwalPelajaran::create([
            'kelas_id' => $request->input('kelas_id'),
            'mapel_id' => 1,
            'semester_id' => $setting_semester->semester_id,
            'kkm' => 75,
            'user_id' => $request->user()->id,
            
        ]);

        $request->session()->put('kelas_mapel', $jadwalMapel->id);
        
        return redirect('dashboard');
    }
}
