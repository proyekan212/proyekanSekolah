<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DaftarKelas;
use App\Imports\DaftarKelasSiswaImport;
use App\Imports\DetailSiswaImport;
use Excel;
class ImportExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


 
     public function tambah_jadwal_import(Request $request)
    {
        $tanggal = date('Y-M-d');
        $import = new DaftarKelasSiswaImport($request->session()->get('kelas_id'));
        // dd($import);
        return Excel::download( $import, 'Absensi Kelas'.' Tanggal '.$tanggal.' '.'.xlsx');  
    }


    public function index()
    {
        //
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
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
 
        // menangkap file excel
        $file = $request->file('file');
 
        // membuat nama file unik
        $nama_file = date('Y-M-d').$file->getClientOriginalName();

    dd($nama_file);

        if (file_exists(public_path('data_siswa/'.$nama_file))) {
        
        return redirect()->back();
          
        }
        else{

// ->exists()
        // upload ke folder file_siswa di dalam folder public
        $file->move('data_siswa',$nama_file);
 // dd(public_path('data_siswa/'.$nama_file));
        // import data
         Excel::import(new DaftarKelasSiswaImport, public_path('data_siswa/'.$nama_file));
         Excel::import(new DetailSiswaImport, public_path('data_siswa/'.$nama_file));
        
        // notifikasi dengan session
        // Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
        // alihkan halaman kembali
        return redirect('/Data_Master_Siswa');
    }
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
