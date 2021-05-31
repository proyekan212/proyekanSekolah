<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Model\MasterJadwalPelajaran;
use Illuminate\Http\Request;
use App\Model\Absen;
use App\Model\DaftarKelas;
use App\Model\SettingSemester;
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

        $setting = SettingSemester::first();

        $user_detail = UserDetail::where('user_id', $request->user()->id)->first();
        $siswa_kelas = DaftarKelas::where(
            [
                // ['kelas_id', '=', $request->session()->get('kelas')],
                ['user_id', '=', $user_detail->id]
            ]
            )
            ->whereHas('kelas.tahun_akademik', function($q) use($setting) {
                $q->where('tahun_akademik', '=', $setting->tahun_akademik->tahun_akademik);
            })
            ->first();
       
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
// <<<<<<< HEAD
        // dd($request->session()->get('kelas_mapel'));
        
//         return view('pages.student.kelas_mapel', [
//             'kelas_mapel' => $kelasMapel

// =======
//         // dd($siswa_kelas);
        $pertemuan = Absen::where([
            ['kelas_mapel_id', '=', $request->session()->get('kelas_mapel')],
            ['siswa_id', '=', $siswa_kelas->id]
        ])
        ->selectRaw('max(pertemuan) as pertemuan_terakhir')
        ->first();
        return view('pages.student.kelas_mapel', [
            'kelas_mapel' => $kelasMapel,
            'pertemuan' => $pertemuan
// >>>>>>> c4e4f87815e47ce1ce18a79cc9008fc0b97f4750
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

    public function absen(Request $request){

        $setting = SettingSemester::first();
        
        $user_detail = UserDetail::where('user_id', $request->user()->id)->first();
        $siswa_kelas = DaftarKelas::where(
            [
                // ['kelas_id', '=', $request->session()->get('kelas')],
                ['user_id', '=', $user_detail->id]
            ]
            )
            ->whereHas('kelas.tahun_akademik', function($q) use($setting) {
                $q->where('tahun_akademik', '=', $setting->tahun_akademik->tahun_akademik);
            })
            ->first();

            $absen = Absen::create([
                'kelas_mapel_id' => $request->session()->get('kelas_mapel'),
                'siswa_id' => $siswa_kelas->id,
                'pertemuan' => $request->input('absen')
            ]);
        
            return redirect('kelas_mapel');
            
    }
}
