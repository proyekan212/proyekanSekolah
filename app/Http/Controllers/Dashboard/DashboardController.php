<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Model\DaftarKelas;
use App\Model\Kelas;
use App\Model\MasterJadwalPelajaran;
use App\Model\MasterJurusan;
use App\Model\MasterKelas;
use App\Model\MasterMapel;
use App\Model\MasterSemester;
use Illuminate\Http\Request;
use App\Model\Menu;
use App\Model\SettingSemester;
use App\Model\User;
use App\Model\UserDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToArray;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $menu = Menu::all();

        // untuk siswa
        $mapel = MasterJadwalPelajaran::all();
        $semester = MasterSemester::all();
        $user = User::where('id', $request->user()->id)->first();
        $jurusan = MasterJurusan::get();
        $setting_semester = SettingSemester::first();
        $user_detail = UserDetail::where('user_id', $request->user()->id)->first();
        // dd($user_detail);
        $daftarKelas = DaftarKelas::with(['kelas' => function($q) {

        }, 'user_detail', 'blocklist'])
        ->where('user_id', $user->user_detail->id )
        ->whereHas('kelas.tahun_akademik', function($q) use($setting_semester) {
            $q->where('id', $setting_semester->tahun_akademik->id);
        })
        ->first();
     

        
        // dd($user->user_detail->name);


        // untuk guru
        $kelas = Kelas::with(['jadwal_pelajaran'=> function($q) use($request, $setting_semester) {
            $q->where('user_id', '=', $request->user()->id);
            $q->where('semester_id' ,'=', $setting_semester->semester_id);
            
        }])
        ->where([
            ['tahun_akademik_id', '=', $setting_semester->tahun_akademik_id],
        ])
        ->get();
        return view('dashboard', [
            'showSemester'      => $semester,
            'showMataPelajaran' => $mapel,
            'setting_semester' => $setting_semester,
            'daftarKelas' => $daftarKelas,
            'jurusan' => $jurusan,
            'kelas' => $kelas,
            'user' => $user,
            'user_detail' => $user_detail,
            // 'menu' => $menu
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
        $setting = SettingSemester::first();
        MasterJadwalPelajaran::create([
            'mapel_id' => $request->input('mapel'),
            'kelas_id' => $request->input('kelas'),
            'user_id' => $request->user()->id,
            'semester_id' => $setting->semester->id,

        ]);

        return redirect('/dashboard');
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

    public function getKelas(Request $request) {
        $setting = SettingSemester::first();

        $kelas = Kelas::
        with(['master_kelas.jurusan', 'master_kelas.kode_kelas'])
        ->where('tahun_akademik_id', $setting->tahun_akademik_id)
        ->whereHas('master_kelas.jurusan', function($q) use($request) {
            $q->where('id', '=', $request->input('jurusan_id'));
        })

        ->get();
        return response()->json([
            "data" => $kelas
        ]);
    }

    public function getMapels(Request $request) {
        $setting = SettingSemester::first();
        
        $mapels = MasterMapel::
        whereNotIn('id', function($q) use($request) {
            $q->select('mapel_id')->from('master_jadwal_pelajarans')
            ->where('kelas_id', '<>', $request->input('kelas_id'));
        })
        ->where('jurusan_id', '=', $request->input('jurusan_id'))
        ->get();


        // dd($mapels);

        return response()->json([
            'data' => $mapels
        ]);
    }
}
