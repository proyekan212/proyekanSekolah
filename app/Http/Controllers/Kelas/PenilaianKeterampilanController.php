<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use App\Model\KompetensiDasar;
use App\Model\MasterPenilaianKeterampilan;
use Illuminate\Http\Request;


class PenilaianKeterampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kompetensi_dasar = KompetensiDasar::where('kompetensi_inti_id', 2)->get();
        
        return view('pages.kelas.PenilaianKd4', [
            'kompetensi_dasar'=> $kompetensi_dasar,
            'datas'=>MasterPenilaianKeterampilan::where('hapus', 0)->get()
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
        $kompetensi_dasar = "";

        foreach($request->kompetensi_dasar as $row) {

            $kompetensi_dasar  .=  strval($row).',' ;
        }

        // dd($request->all());
        MasterPenilaianKeterampilan::create([
            'nama_penilaian'=> $request->nama_penilaian,
            'skema' => $request->skema_penilaian,
            'kompetensi_dasar'=>$kompetensi_dasar,
            'keterangan' => $request->keterangan,
            'mulai_pengerjaan' => $request->mulai_pengerjaan,
            'finish_pengerjaan' => $request->finish_pengerjaan
        ]);

        return redirect('kelas/penilaian_keterampilan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterPenilaianKeterampilan::where('id', $id)->update(['hapus' => 1]);
        return redirect('kelas/penilaian_keterampilan');
    }
}
