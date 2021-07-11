<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\MasterKompetensiInti;
use App\Model\SettingSemester;
use DB;
class KompetensiDasarController extends BaseController
{
    public function index(){
        return view('pages.kelas.kompetensidasar', [
            'kompetensi_inti' => MasterKompetensiInti::all(),
            'semester' => SettingSemester::first(),
            // 'kompetensi_inti' => MasterKompetensiInti::all(),
        ]);
    }

      public function store(Request $request)
    {   
       // $data = $request->all();
    //    dd($data);



     MasterKejadianJurnal::create([
        'kelas_mapel_id' => $request->session()->get('kelas_mapel'),
        'waktu' => $request->input('waktu'),
        'kejadian' => $request->input('kejadian'),
        'tindakan' => $request->input('tindakan'),
        'tindak_lanjut' => $request->input('tindak_lanjut'),
        'butir_sikap' => $request->input('butir_sikap'),
        'user_id' => $request->input('user_id')     
    ]);


 //    MasterKejadianJurnal::create(
 //     $data

 // );

    return redirect('kelas/kejadian_jurnal');
}

    public function __construct()
    {
        $this->middleware('auth');
    }
}
