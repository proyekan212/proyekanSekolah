<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\MasterJadwalPelajaran;
use App\Model\MasterJurusan;
use App\Model\MasterKelas;
use App\Model\MasterKodeKelas;
use App\Model\MasterMapel;
use App\Model\MasterSemester;
use App\Model\MasterKKM;
class JadwalPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $datas = MasterJadwalPelajaran::all();
        $master_jadwal_pelajaran = MasterJadwalPelajaran::all();
        $master_kode_kelas = MasterKodeKelas::all();
        // $id_master_kode_kelas = MasterKodeKelas::all('id');
        $master_jurusan = MasterJurusan::all()->where('hapus',0);
        // $id_master_jurusan = MasterJurusan::all('id')->where('hapus',0);
        $master_kelas = MasterKelas::all();
        $master_mapel = MasterMapel::all()->where('hapus',0);
        $master_semester = MasterSemester::all();
// dd($master_semester);
          return view('pages.admin.jadwalpelajaran', [
                // 'kompetensi_inti' => MasterKompetensiInti::all(),
            'datas' => MasterJadwalPelajaran::all(),
            // 'nama_kelas' => $master_kelas,
            'showJurusan' => $master_jurusan,
            'showKelas' => $master_kelas,
            'showTahunAjaran' => $master_semester,
            'showMapel' => $master_mapel,
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
        $tahun = date('Y');
          $matapelajaran = "";
          $kkm = "";
          $master_mata_pelajaran = MasterMapel::where('id',$request->mata_pelajaran)->first();
        // foreach($request->matapelajaran as $row) {

        //     $nama_mapel  .=  $row->nama_mapel;
        //     $kkm  .=  $row->kkm_id;
        // }
          // dd($master_mata_pelajaran);
            $nama_mapel  =  $master_mata_pelajaran->nama_mapel;
            $kkm_id  =  $master_mata_pelajaran->kkm_id;
            $kkm  = MasterKKM::where('id',$kkm_id)->first();
// dd($kkm);
        MasterJadwalPelajaran::create([
            'nama_kelas'=> $tahun . ' ' . $request->nama_semester . ' ' . $request->kelas,
            'guru' => $request->guru,
            'jenjang'=>$request->nama_semester,
            'kelas' => $request->kelas,
            'mata_pelajaran' => $nama_mapel,
            'kkm' =>  $kkm->kkm
        ]);

        return redirect('Jadwal_Pelajaran');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
             $datas = MasterJadwalPelajaran::where('id',$id)->first();
        $master_jadwal_pelajaran = MasterJadwalPelajaran::all();
        $master_kode_kelas = MasterKodeKelas::all();
        // $id_master_kode_kelas = MasterKodeKelas::all('id');
        $master_jurusan = MasterJurusan::all()->where('hapus',0);
        // $id_master_jurusan = MasterJurusan::all('id')->where('hapus',0);
        $master_kelas = MasterKelas::all();
        $master_mapel = MasterMapel::all()->where('hapus',0);
        $master_semester = MasterSemester::all();
// dd($master_semester);
          return view('pages.admin.jadwalpelajaranedit', [
                // 'kompetensi_inti' => MasterKompetensiInti::all(),
            'datas' => $datas,
            // 'nama_kelas' => $master_kelas,
            'showJurusan' => $master_jurusan,
            'showKelas' => $master_kelas,
            'showTahunAjaran' => $master_semester,
            'showMapel' => $master_mapel,
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
        //
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
      $tahun = date('Y');
          $matapelajaran = "";
          $kkm = "";
          $master_mata_pelajaran = MasterMapel::where('id',$request->mata_pelajaran)->first();
        // foreach($request->matapelajaran as $row) {

        //     $nama_mapel  .=  $row->nama_mapel;
        //     $kkm  .=  $row->kkm_id;
        // }
          // dd($master_mata_pelajaran);
            $nama_mapel  =  $master_mata_pelajaran->nama_mapel;
            $kkm_id  =  $master_mata_pelajaran->kkm_id;
            $kkm  = MasterKKM::where('id',$kkm_id)->first();
// dd($kkm);
        MasterJadwalPelajaran::where('id', $id)->update([
            'nama_kelas'=> $tahun . ' ' . $request->nama_semester . ' ' . $request->kelas,
            'guru' => $request->guru,
            'jenjang'=>$request->nama_semester,
            'kelas' => $request->kelas,
            'mata_pelajaran' => $nama_mapel,
            'kkm' =>  $kkm->kkm
        ]);

        return redirect('Jadwal_Pelajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterJadwalPelajaran::where('id', $id)->update([
            'hapus' => 1,
        ]);

        return redirect('Jadwal_Pelajaran');
    }
}
