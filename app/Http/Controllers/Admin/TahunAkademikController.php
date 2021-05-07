<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\TahunAkademik;
use Illuminate\Http\Request;

class TahunAkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tahunAkademik = TahunAkademik::where('hapus', 0)->get();
         return view('pages.admin.tahunakademik', [
            'tahun_akademik' => $tahunAkademik
        ]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        TahunAkademik::create([
            'tahun_akademik' => $request->input('tahun_akademik'),
        ]);

        return redirect('tahun_akademik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $tahunAkademik = TahunAkademik::where('id', $id)->first();
         return view('pages.admin.tahunakademikedit', [
            'datas' => $tahunAkademik
        ]); 
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
         TahunAkademik::where('id', $id)->update([
            'tahun_akademik' => $request->input('tahun_akademik'),
        ]);

        return redirect('tahun_akademik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        TahunAkademik::where('id',$id)->update([
            'hapus' => 1
        ]);

        return redirect('tahun_akademik');
    }
}
