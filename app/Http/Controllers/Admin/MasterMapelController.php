<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\MasterJurusan;
use App\Model\MasterKKM;
use App\Model\MasterMapel;
use App\Models\MasterMapel as ModelsMasterMapel;
use Illuminate\Http\Request;


class MasterMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $kkm = MasterKKM::where('hapus', 0)->get();
        $datas = MasterMapel::with(['jurusan', 'kkm'])
        ->where('hapus', 0)
        ->whereHas("jurusan", function($query) {
            $query->where('hapus', '=', 0);
        })
        ->whereHas("kkm", function($query) {
            $query->where('hapus', '=', 0);
        })
        ->get();
        $jurusan = MasterJurusan::where('hapus', 0)->get();
        return view('pages.admin.master_mapel',[
            "kkm" => $kkm,
            "jurusan" => $jurusan,
            "datas" => $datas
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
        MasterMapel::create([
            'nama_mapel' => $request->input('mapel'),
            'jurusan_id' => $request->input('jurusan'),
            'kkm_id' => $request->input('kkm')
        ]);

        return redirect('data_master_mapel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $kkm = MasterKKM::where('hapus', 0)->get();
        $datas = MasterMapel::where('id', $id)->first();
        
        $jurusan = MasterJurusan::where('hapus', 0)->get();
        return view('pages.admin.master_mapeledit',[
            "kkm" => $kkm,
            "jurusan" => $jurusan,
            "datas" => $datas
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
         MasterMapel::where('id', $id)->update([
            'nama_mapel' => $request->input('mapel'),
            'jurusan_id' => $request->input('jurusan'),
            'kkm_id' => $request->input('kkm')
        ]);

        return redirect('data_master_mapel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterMapel::where('id', $id)->update([
            'hapus'=> 1
        ]);

        return redirect('data_master_mapel');
    }
}
