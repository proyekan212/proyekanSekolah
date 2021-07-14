<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DaftarKelas;
use App\Imports\DaftarKelasSiswaImport;
use App\Imports\DetailSiswaImport;
use App\Imports\DaftarKelasGuru;
use App\Imports\DetailGuruImport;
use App\Imports\ImporUser;
use App\Model\UserDetail;
use App\Model\User;
use Excel;
class ImportExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


   public function daftar_siswa_kelas_import(Request $request)
    {
        // validasi
        // $this->validate($request, [
        //     'file' => 'required|mimes:csv,xls,xlsx'
        // ]);
 
        // menangkap file excel
        $file = $request->file('file');
 
        // membuat nama file unik
        $nama_file = date('Y-M-d').$file->getClientOriginalName();
        
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
        $data =  Excel::toArray(new ImporUser, public_path('data_siswa/'.$nama_file));

        // foreach ($data as $key => $value_1) {
        foreach ($data[0] as $key => $value_1) {

            
        // dd($data[1]);


            $data_user_import_id = User::where('username', $value_1[1])->get();

        foreach ($data_user_import_id as $key => $value) {
                    
        UserDetail::where('nisn_or_nip', $value_1[7])->update([
            'user_id' => $value->id
        ]);
        }
        
        // dd($data_user_import_id);
}
        // notifikasi dengan session
        // Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
        // alihkan halaman kembali
        return redirect('/Data_Master_Siswa');
    }
    }

    public function daftar_guru_kelas_excel_import(Request $request)
    {
        // validasi
        // $this->validate($request, [
        //     'file' => 'required|mimes:csv,xls,xlsx'
        // ]);
 
        // menangkap file excel
        $file = $request->file('file');
 
        // membuat nama file unik
        $nama_file = date('Y-M-d').$file->getClientOriginalName();
        
        // if (file_exists(public_path('data_siswa/'.$nama_file))) {
        
        // return redirect()->back();
          
        // }
        // else{

// ->exists()
        // upload ke folder file_siswa di dalam folder public
        $file->move('data_siswa',$nama_file);
 // dd(public_path('data_siswa/'.$nama_file));
        // import data
         Excel::import(new DaftarKelasGuru, public_path('data_siswa/'.$nama_file));
         Excel::import(new DetailGuruImport, public_path('data_siswa/'.$nama_file));
        $data =  Excel::toArray(new ImporUser, public_path('data_siswa/'.$nama_file));

        // $ARR_1 = [];
        foreach ($data[0] as $key => $value_1) {

        // foreach ($value_1 as $key => $value_2) {
            // $ARR_1[] = $value_1[1];
// dd($value_1[1]);            
// dd($value_1);            

        $data_user_import_id = User::where('username', $value_1[1])->get();

        foreach ($data_user_import_id as $key => $value) {
                    
        UserDetail::where('nisn_or_nip', $value_1[7])->update([
            'user_id' => $value->id
        ]);

            // }
        }
        
        // dd($data_user_import_id);
    }
        // notifikasi dengan session
        // Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
        // alihkan halaman kembali
        return redirect('/Data_Master_Guru');
    // }
    }

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
