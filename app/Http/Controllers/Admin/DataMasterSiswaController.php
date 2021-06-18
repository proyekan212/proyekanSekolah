<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\User ;
use App\Model\UserDetail;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Auth;
class DataMasterSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $siswa = UserDetail::where('role_id', 3)->where('hapus', 0)->get();
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
            'role_id' => 3,
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
         $siswa = UserDetail::where('id', $id)->first();
        return view('pages.admin.datamastersiswaedit', [
          // 'datas' => DB::table('master_kelas')->get(),
          'siswa' => $siswa,
        ]);    }

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
        //  dd();
        if (Auth::user()->id != UserDetail::where('id', $id)->first()->user_id) {
            UserDetail::where('id', $id)->update([
            'name' => $data['nama'],
            'nisn_or_nip' => $data['nip'],
            'tempat_lahir' => $data['tempat_lahir'],
            'email' => $data['email'],
            "jenis_kelamin" => $data['jenis_kelamin'],
            "tahun_masuk" => $data['tahun_masuk'],
            'role_id' => 3,
            // 'photo' => $file_formatted

           
        ]);

        return redirect('Data_Master_Siswa');
        }
        else{
        $file = $request->file('foto');
        $filename = $data['nip'].'-'.$data['nama'].'-'.$file->getClientOriginalName();
        $file_formatted = str_replace(' ', '_', $filename);
        $file->move(public_path().'Album-Foto-Siswa/', $file_formatted);
          UserDetail::where('id', $id)->update([
            'name' => $data['nama'],
            'nisn_or_nip' => $data['nip'],
            'tempat_lahir' => $data['tempat_lahir'],
            'email' => $data['email'],
            "jenis_kelamin" => $data['jenis_kelamin'],
            "tahun_masuk" => $data['tahun_masuk'],
            'role_id' => 3,
            'photo' => $file_formatted

           
        ]);

        return redirect('Data_Master_Siswa');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $pet = User::where('id',$id)->first();
        $tes = UserDetail::where('user_id',$id);
         $pet->update([
            'hapus' => 1]);
        $tes->update([
            'hapus' => 1]);  
         return redirect('Data_Master_Siswa');
    }
}
