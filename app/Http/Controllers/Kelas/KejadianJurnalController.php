<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use App\Model\MasterKejadianJurnal;
use App\Model\User;
use App\Model\UserDetail;
use Illuminate\Http\Request;

class KejadianJurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = UserDetail::with(['role' => function($query) {
            $query->where('name_role', '=', 'siswa');
        }])->get();
        $datas = MasterKejadianJurnal::where('hapus', 0)->get();
        return view('pages.kelas.kejadianjurnal', [
            "users"=> $siswa,
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
       $data = $request->all();
    //    dd($data);
       
       MasterKejadianJurnal::create(
           $data
       );

       return redirect('kelas/kejadian_jurnal');
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
        $data = MasterKejadianJurnal::findOrFail($id);
        
        $siswa = UserDetail::with(['role' => function($q) {
            $q->where('name_role', '=', 'siswa');
        }])->get();

        return view('pages.kelas.kejadianjurnaledit', [
            'data'=> $data,
            'siswa' => $siswa
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
       

       
        $input = MasterKejadianJurnal::where('id', $id)->update([
            'waktu'=>$request->input('waktu'),
            'user_id' => $request->input('user_id'),
            'kejadian' => $request->input('kejadian'),
            'butir_sikap' => $request->input('butir_sikap'),
            'tindakan' => $request->input('tindakan'),
            'tindak_lanjut' => $request->input('tindak_lanjut')
        ]);
     
        return redirect('kelas/kejadian_jurnal');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MasterKejadianJurnal::where('id', $id)->update(['hapus'=> 1]);
        return redirect('kelas/kejadian_jurnal');
    }
}
