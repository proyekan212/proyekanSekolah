<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use App\Model\DaftarKelas;
use App\Model\UserDetail;
use Illuminate\Http\Request;


class PenilaianSemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \IlluminatUserDetail::all()e\Http\Response
     */
    public function index(Request $request)
    {   
        // dd($request->session()->get('kelas_id'));
        $siswa = DaftarKelas::where('kelas_id', $request->session()->get('kelas_id'))->get();
        return view('pages.kelas.PenilaianSemester', [
            'siswa'=> $siswa
        ]
        
    );
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
