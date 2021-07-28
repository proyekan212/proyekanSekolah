<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\MasterKompetensiInti;
use App\Model\KompetensiDasar;
use App\Model\KompetensiDasarPerKelas;
use App\Model\SettingSemester;
use DB;
class KompetensiDasarController extends BaseController
{
    public function index(){
        $semester_id = SettingSemester::first();

        return view('pages.kelas.kompetensidasar', [
            'kompetensi_inti' => MasterKompetensiInti::all(),
            'semester' => $semester_id->semester_id,
            'kompetensi_dasar' => KompetensiDasar::where('semester_id' , $semester_id->semester_id)->get(),
        ]);
    }

    public function store(Request $request)
    {   
   
    
        $semester_id = SettingSemester::first();


        foreach ($request->kompetensi_dasar as $key => $value) {

          $kompetensi_inti_id = KompetensiDasar::where('id' , $value)->first();
           KompetensiDasarPerKelas::create([
            'kelas_mapel_id' => $request->session()->get('kelas_mapel'),
            'semester_id' => $semester_id->semester_id,
            // 'tahun_akademik_id' => $semester_id->tahun_akademik_id,
            'kompetensi_dasar_id' => $value,
            'kompetensi_inti_id' => $kompetensi_inti_id->kompetensi_inti_id,
        ]);
       }

 

       return redirect('kelas/kompetensi_dasar');
   }

   public function __construct()
   {
    $this->middleware('auth');
}
}
