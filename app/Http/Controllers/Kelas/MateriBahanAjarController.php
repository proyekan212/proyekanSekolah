<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\MateriBahanBelajar;
use DB;
class MateriBahanAjarController extends BaseController
{
    public function index(Request $request){
        
       
        $materi = MateriBahanBelajar::where([
            ['hapus', '=', '0'],
            ['kelas_id', '=', $request->session()->get('kelas_id')],
            ['kelas_mapel_id', '=',$request->session()->get('kelas_mapel')]
        ])->get();
        // dd(count($request->session()->get('kelas_id')));
        return view('pages.kelas.teacher.materi', [
            'materi' => $materi,
            'kelas_mapel' => $request->session()->get('kelas_mapel'),
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
      public function edit($id)
    {
      $materi = MateriBahanBelajar::where([
            ['hapus', '=', '0'],
            ['kelas_id', '=', $request->session()->get('kelas_id')],
            ['kelas_mapel_id', '=',$request->session()->get('kelas_mapel')]
        ])->where('id', $id)->get();
        // dd(count($request->session()->get('kelas_id')));
        return view('pages.kelas.teacher.materiedit', [
            'materi' => $materi,
            'kelas_mapel' => $request->session()->get('kelas_mapel'),
        ]);
    }
    public function destroy($id) {
        MateriBahanBelajar::where('id', $id)->update([
            'hapus' => 1,
        ]);

        return redirect('kelas/materi_bahan_ajar');
    }

    public function store(Request $request) {

        if($request->input('type') == 'file'){
            $file = $request->file('link');
            $filename = time().'.'.$file->getClientOriginalName();
            $file_formatted = str_replace(' ', '_', $filename);
            
            $file->move('materi_bahan_ajar/'.$request->session()->get('kelas_mapel'), $file_formatted);
           
            MateriBahanBelajar::create([
                'link' => $file_formatted,
                'name' => $request->input('name'),
                'sender_id' => $request->user()->id,
                'descriptions' => $request->input('descriptions'),
                'type' => $request->input('type'),
                'kelas_id' => $request->session()->get('kelas_id'),
                'kelas_mapel_id' => $request->session()->get('kelas_mapel'),
                'created_at' => time(),
            ]);
        }
        else {
            MateriBahanBelajar::create([
                'link' => $request->input('link'),
                'descriptions' => $request->input('descriptions'),
                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'sender_id' => $request->user()->id,
                'kelas_id' => $request->session()->get('kelas_id'),
                'kelas_mapel_id' => $request->session()->get('kelas_mapel'),
                'created_at' => time(),
            ]);
        }        
        return redirect('kelas/materi_bahan_ajar');
    }
    public function show($id) {
        $materi = MateriBahanBelajar::where('id', $id)->first();
        return view('pages.kelas.teacher.materiedit', [
            'materi' => $materi
        ]);
    }

    public function update(Request $request, $id){
        MateriBahanBelajar::where('id', $id)->update([
            'link' => $request->input('link'),
            'name' => $request->input('name'),
        ]);

        return redirect('kelas/materi_bahan_ajar');
    }

}


