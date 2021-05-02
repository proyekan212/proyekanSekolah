<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\MasterSemester;
use App\Model\SettingSemester;
use App\Model\TahunAkademik;
use Illuminate\Http\Request;

class SettingSemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semester = MasterSemester::get();
        $tahun_akademik = TahunAkademik::get();
        $setting = SettingSemester::first();
       return view('pages.admin.settingsemester', [
            // 'kompetensi_inti' => MasterKompetensiInti::all(),
            'semester' => $semester,
            'tahun_akademik' => $tahun_akademik,
            'setting' => $setting,
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
        $setting = SettingSemester::findOrFail($id);
        $data = $request->all();

        $setting->update([
            'tahun_akademik_id'=> $data['tahun_akademik_id'],
            'semester_id' => $data['semester_id']
        ]);

        return redirect('Setting_Semester');
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
