<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\MasterMapel;
use App\Model\User;
use App\Model\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataMasterGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $mapel = MasterMapel::where('hapus', 0)->get();
        $guru = UserDetail::where('role_id', 2)->get();
         return view('pages.admin.datamasterguru', [
            // 'kompetensi_inti' => MasterKompetensiInti::all(),
            'guru' => $guru,
            'mapel'=> $mapel
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
        
        $data = $request->all();

       
        $user = User::create([
            'username' => $data['nip'],
            'password' => Hash::make($data['nip'])
        ]);


        UserDetail::create([
            'user_id' => $user->id,
            'name' => $data['nama'],
            'nisn_or_nip' => $data['nip'],
            'tempat_lahir' => $data['tempat_lahir'],
            'email' => $data['email'],
            "jenis_kelamin" => $data['jenis_kelamin'],
            "tahun_masuk" => $data['tahun_masuk'],
            "mapel_id" => $data['mapel_id'],
            'role_id' => 2,
        ]);

        return redirect('Data_Master_Guru');
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
