<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\MasterNilaiKeterampilan;

class PenilaianSiswaKeterampilanController extends Controller
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
        $data = $request->all();

        $nilai =MasterNilaiKeterampilan::where([
                    ['penilaian_keterampilan_id', '=', $request->input('penilaian_keterampilan_id')],
                    ['user_detail_id', '=', $request->input('user_detail_id')]
                ]);
        if($nilai->count() > 0){
            $nilai->update($data);
        }
        else {
             $nilai = MasterNilaiKeterampilan::create(
                $data
             );
        }
       

        return response()->json([
            'data' => $nilai
        ]);
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
