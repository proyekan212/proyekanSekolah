<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\User ;
use App\Model\UserDetail;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class DataMasterSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $siswa = UserDetail::where('role_id', 3)->get();
        return view('pages.admin.datamastersiswa', [
          // 'datas' => DB::table('master_kelas')->get(),
          'siswa' => $siswa,
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

        $data= $request->all();
     
        $user = User::create([
            'username' => $data['nisn'],
            'password' => Hash::make($data['nisn']),
        ]);

        UserDetail::create([
            'name' => $data['nama'],
            'user_id'=> $user->id,
            'jenis_kelamin' => $data['jenis_kelamin'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tahun_masuk' => $data['tahun_masuk'],
            'email' => $data['email'],
            'nisn_or_nip' => $data['nisn'],
            'role_id' => 3
        ]);

        return redirect('Data_Master_Siswa');
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
         $data = $request->all();
        
          UserDetail::where('id', $id)->update([
            'name' => $data['nama'],
            'nisn_or_nip' => $data['nip'],
            'tempat_lahir' => $data['tempat_lahir'],
            'email' => $data['email'],
            "jenis_kelamin" => $data['jenis_kelamin'],
            "tahun_masuk" => $data['tahun_masuk'],
            'role_id' => $data['role_id'],
        ]);

        return redirect('dashboard');
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
