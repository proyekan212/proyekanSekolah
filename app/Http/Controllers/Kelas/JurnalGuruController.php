<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use App\Model\JurnalGuru;
use Illuminate\Http\Request;


class JurnalGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.kelas.jurnalguru',[
            'jurnal_gurus' => JurnalGuru::where('hapus', '0')->get()
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
       $data = $request->all();

       JurnalGuru::create(
           $data
       );

       return redirect('kelas/jurnal_guru');
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
        // $kompetensi_dasars = KompetensiDasar::all();
        $data = JurnalGuru::findOrFail($id);
        return view('pages.kelas.jurnalguruedit', [
            // 'kompetensi_dasars'=> $kompetensi_dasars,
            'datas'=> $data,
        ]);
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
        $data = $request->all();

       JurnalGuru::where('id', $id)->update([
        'waktu' => $request->waktu,
        'kelas_id' => $request->kelas_id,
        // 'hapus' => $request->hapus,
        'pertemuan' => $request->pertemuan,
        'materi' => $request->materi

       ]);

       return redirect('kelas/jurnal_guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JurnalGuru::where('id', $id)->update(['hapus'=> 1]);

        return redirect('kelas/jurnal_guru');
    }
}
