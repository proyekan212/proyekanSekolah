<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Model\MasterJadwalPelajaran;
use Illuminate\Http\Request;
use App\Model\Absen;
use App\Model\UserDetail;
class KelasMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $kelasMapel = MasterJadwalPelajaran::with(['penilaian_pengetahuan.tugas_pengetahuan' => function($q) use($request) {
                $q->where('user_id', '=', $request->user()->id);
             },
             'penilaian_keterampilan.tugas_keterampilan' => function($q) use($request) {
                $q->where('user_id', '=', $request->user()->id);
             }
            ])->where([
            ['hapus', '=', 0],
            ['id', '=', $request->session()->get('kelas_mapel')]
        ])->first();
        // dd($request->session()->get('kelas_mapel'));
        
        return view('pages.student.kelas_mapel', [
            'kelas_mapel' => $kelasMapel

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
        $request->session()->put('kelas_mapel', $request->input('kelas_mapel_id'));

        $user_detail = UserDetail::where('user_id', $request->user()->id)->first();

        $currentAbsen = Absen::where([
            [ 'kelas_mapel_id', '=', $request->session()->get('kelas_mapel')],
            ['user_detail_id', '=', $user_detail->id]
        ])->first();
         $checkAbsenDate = null;

        if($currentAbsen != null) {
            
            $checkAbsenDate= date("Y-m-d", strtotime($currentAbsen->absen_at));
        }

         if($checkAbsenDate != date("Y-m-d") || $checkAbsenDate != null) {
                   Absen::create([
                'kelas_mapel_id' => $request->session()->get('kelas_mapel'), 
                'user_detail_id' => $user_detail->id,
                'absen_at' => now(),
                'status' => 'hadir'
                 ]);
            }
 
        

     

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
        //
    }
}
