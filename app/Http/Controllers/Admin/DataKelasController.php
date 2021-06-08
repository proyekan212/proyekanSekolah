<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\DaftarKelas;
use App\Model\Kelas;
use App\Model\MasterJurusan;
use App\Model\MasterKelas;
use App\Model\RombelKelas;
use App\Model\TahunAkademik;
use App\Model\UserDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tahun_akademik = TahunAkademik::where('hapus', 0)->get();
        $rombel = RombelKelas::where('hapus', 0)->get();
        $jurusan = MasterJurusan::get();
        $master_kelas = MasterKelas::where('hapus', 0)->get();
        $datas = Kelas::where('hapus', 0)
        ->with(['daftar_kelas' => function($q) {
            $q->has('user_detail');
        }])
        ->get();
      
        
        return view('pages.admin.datakelas', [
            'datas' => $datas,
            'tahun_akademik' => $tahun_akademik,
            'rombel' => $rombel,
            'jurusan' => $jurusan,
            'master_kelas' => $master_kelas,
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
        Kelas::create([
            'master_kelas_id' => $request->input('kelas'),
            'tahun_akademik_id' => $request->input('tahun_akademik'),
            'rombel_id'=> $request->input('rombel'),
           
        ]);

        return redirect('data_kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {   
        
        
        $data = UserDetail::where([
            ['role_id', '=', 3],
            ])
            ->with(['daftar_kelas.kelas' => function($q) use($id) {
                $q->where([

                    ['id', '!=', $id],
                    ['id', '=', null]
                ]);
        
            },])
            // ->whereHas('daftar_kelas', function($q) use($id) {
            //     $q->where('kelas_id', '!=', $id);
            // })
            // ->whereRaw(Carbon::now()->format('Y'). '- tahun_masuk = '. $request->input('kode_kelas'))
            
            
            
            ->get();

        

        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
         $tahun_akademik = TahunAkademik::where('hapus', 0)->get();
        $master_kelas = MasterKelas::where('hapus', 0)->get();
        $datas = Kelas::where('id', $id)
        ->with(['daftar_kelas' => function($q) {
            $q->has('user_detail');
        }])
        ->first();
        $rombel = RombelKelas::where('hapus', 0)->get();
       
      
        
        return view('pages.admin.datakelasedit', [
            'datas' => $datas,
            'tahun_akademik' => $tahun_akademik,
            'rombel' => $rombel,
            'master_kelas' => $master_kelas,
        ]);
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
         Kelas::where('id', $id)->update([
            'master_kelas_id' => $request->input('kelas'),
            'tahun_akademik_id' => $request->input('tahun_akademik'),
            'rombel_id'=> $request->input('rombel'),
        ]);

        return redirect('data_kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Kelas::where('id', $id)->update([
            'hapus'=> 1
        ]);
        
        return redirect('data_kelas');
    }

    public function storeSiswaKelas(Request $request) {
        $data = $request->all();
        foreach($data['user_id'] as $value) {
            DaftarKelas::create([
                'kelas_id' => $data['kelas_id'],
                'user_id' => $value,
                'rombel_id' => 1
            ]);

        }
        return redirect('data_kelas');
    }
}
