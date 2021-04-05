<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TugasSiswaKeterampilan;

class TugasSiswaKeterampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('wageslah'); 
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
        
        $file->move('tugas/keterampilan', $file_formatted);
       
         TugasSiswaKeterampilan::create([
            'user_id' => $request->user()->id,
            'filename_path' => $file_formatted,
            'created_at' => time(),
            'penilaian_keterampilan_id' => $request->input('penilaian_keterampilan')

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
        //
    }
}
