<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\model\AbsenGuru;
use App\Model\MasterJadwalPelajaran;
use DB;

class AbsenController extends BaseController
{
    public function index(Request $request){

        $kelas_mapel = MasterJadwalPelajaran::where('id', $request->session()->get('kelas_mapel'))->first();
        $absens = AbsenGuru::where([
            'kelas_mapel_id' => $request->session()->get('kelas_mapel'),
            'guru_id' => $request->user()->user_detail->id
        ])->get();
        return view('pages.kelas.teacher.absen',[
            'kelas_mapel' => $kelas_mapel,
            'absens' => $absens
        
        ]);
    }


    public function store(Request $request) {

        $update  = MasterJadwalPelajaran::where('id', $request->session()->get('kelas_mapel'))->first();
        $update->update([
            'current_pertemuan' => $request->input('pertemuan')
        ]); 
        $absen = AbsenGuru::create(
            [
                'kelas_mapel_id' => $request->session()->get('kelas_mapel'),
                'pertemuan' => $request->input('pertemuan'),
                'guru_id' => $request->user()->user_detail->id,
                'status' => 'masuk'
            ]
            );
        
        

        return redirect('kelas/absen_guru');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
