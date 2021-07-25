<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use App\Model\MasterJadwalPelajaran;
use App\Model\TeacherNotifications;
use Illuminate\Http\Request;
use File;
use App\Model\TugasSiswaPengetahuan;
use Illuminate\Support\Facades\Storage;
class TugasSiswaPengetahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
         $file = $request->file('file');
        $filename = time().'.'.$file->getClientOriginalName();
        $file_formatted = str_replace(' ', '_', $filename);
        $file->move('tugas/pengetahuan', $file_formatted);
        $kelas_mapel = MasterJadwalPelajaran::where('id', $request->session()->get('kelas_mapel'))->first();

        TeacherNotifications::create([
            'kelas_mapel_id' => $kelas_mapel->id,
            'guru_id' => $kelas_mapel->user_id,
            'description' => "mengumpulkan tugas pengetahuan",
            'siswa_id' => $request->user()->id, 
        ]); 
        
         TugasSiswaPengetahuan::create([
            'user_id' => $request->user()->id,
            'filename_path' => $file_formatted,
            'created_at' => time(),
            'penilaian_pengetahuan_id' => $request->input('penilaian_pengetahuan')

        ]);

         return redirect('kelas_mapel');
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
        $data = TugasSiswaPengetahuan::findOrFail($id);
        $filename_path = public_path() .'/tugas/pengetahuan/'.$data->filename_path;

        File::delete($filename_path);
        // dd($filename_path);
        

        $data->delete();

        return redirect('kelas_mapel');
    }
}
