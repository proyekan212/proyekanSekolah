<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DaftarKelas;
use App\Exports\DaftarSiswaKelasExport;
use App\Exports\KejadianJurnalExport;
use Excel;

class ExportExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function daftar_siswa_kelas(Request $request)
    {
        $tanggal = date('Y-M-d');
        // $daftarKelas = DaftarKelas::where([
        //     ['kelas_id', '=', $request->session()->get('kelas_mapel')]
        // ])->get();
        // $data_kelas_excel ='';
        // $data_report = $daftarKelas->toArray();
        // foreach ($daftarKelas as  $value) {
        //    $data_kelas_id = $value->id;
        //    $data_siswa_photo = $value->user_detail->photo;
        //    $data_siswa_nisn_or_nip = $value->user_detail->nisn_or_nip;
        //    $data_siswa_name = $value->user_detail->name;
        //    $data_siswa_jenis_kelamin = $value->user_detail->jenis_kelamin;
        //    $data_siswa_tempat_tanggal_lahir = $value->user_detail->tempat_lahir . ' - ' . $value->user_detail->tanggal_lahir;
        //    $data_kelas = $value->kelas->kelas . ' ' . $value->rombel->name;
        // $data_kelas_excel = [$data_kelas_id, $data_siswa_photo,  $data_siswa_nisn_or_nip, $data_siswa_name, $data_siswa_jenis_kelamin, $data_siswa_tempat_tanggal_lahir, $data_kelas];
        // }


        // append(' ', array($data_kelas_id, $data_siswa_photo,  $data_siswa_nisn_or_nip, $data_siswa_name, $data_siswa_jenis_kelamin, $data_siswa_tempat_tanggal_lahir, $data_kelas));
        // dd($data_kelas_excel);
        $export = new DaftarSiswaKelasExport();
        
        return Excel::download( $export, 'Kelas '.$request->session()->get('kelas_mapel').' Tanggal '.$tanggal.' '.'.xlsx');  

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function kejadian_jurnal_excel(Request $request)
    {
        $tanggal = date('Y-M-d');
        $export = new KejadianJurnalExport();
        
        return Excel::download( $export, 'Kejadian Jurnal'.' Tanggal '.$tanggal.' '.'.xlsx');  
    }
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
        //
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
        //
    }
}
