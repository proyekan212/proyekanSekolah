<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\MasterKelas;
use App\Model\MasterKodeKelas;
use App\Model\RombelKelas;
use Illuminate\Http\Request;
use DB;
class DataMasterKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = MasterKelas::all();
        $kode_kelas = MasterKodeKelas::all();
        $rombel_kelas = RombelKelas::all();
        return view('pages.admin.datamasterkelas', [
            'datas' => $datas,
            'kode_kelas' => $kode_kelas,
            'rombel_kelas' => $rombel_kelas
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
        MasterKelas::create([
            'kode_kelas_id'=>$request->input('kode_kelas'),
            'rombel_id' => $request->input('rombel'),
            'kelas' => $request->input('kelas'),
        ]);

        return redirect('Data_Master_Kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $datas = MasterKelas::where('id', $id)->first();
        $kode_kelas = MasterKodeKelas::all();
        $rombel_kelas = RombelKelas::all();
        return view('pages.admin.datamasterkelasedit', [
            'datas' => $datas,
            'kode_kelas' => $kode_kelas,
            'rombel_kelas' => $rombel_kelas
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
         MasterKelas::where('id', $id)->update([
            'kode_kelas_id'=>$request->input('kode_kelas'),
            'rombel_id' => $request->input('rombel'),
            'kelas' => $request->input('kelas'),
        ]);

        return redirect('Data_Master_Kelas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
