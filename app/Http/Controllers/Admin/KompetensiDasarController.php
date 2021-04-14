<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\KompetensiDasar;
use App\Model\MasterKompetensiInti;
use App\Model\MasterSemester;
use Illuminate\Http\Request;
use DB;
class KompetensiDasarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $kompetensi_dasar = KompetensiDasar::get();
        $semester = MasterSemester::get();
        $kompetensi_inti = MasterKompetensiInti::get();
        return view('pages.admin.kompetensidasar', [
        'datas' => $kompetensi_dasar,
        'semester' => $semester,
        "kompetensi_inti" => $kompetensi_inti,
            // 'kompetensi_inti' => MasterKompetensiInti::all(),
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
        KompetensiDasar::create([
            'nama_kompetensi_dasar' => $data['kompetensi_dasar'],
            'kompetensi_inti_id' => $data['kompetensi_inti'],
            'semester_id' =>$data['semester'],
        ]);
        
        return redirect('Kompetensi_Dasar');
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
