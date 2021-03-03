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
            ['kelas_id', '=', $request->session()->get('kelas_id')]
        ])->get();
        
        return view('pages.kelas.teacher.materi', [
            'materi' => $materi
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function destroy($id) {
        MateriBahanBelajar::where('id', $id)->update([
            'hapus' => 1,
        ]);

        return redirect('kelas/materi_bahan_ajar');
    }

    public function store(Request $request) {
        MateriBahanBelajar::create([
            'link' => $request->input('link'),
            'name' => $request->input('name'),
            'sender_id' => $request->user()->id,
            'kelas_id' => 1,
            'created_at' => time(),
        ]);

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


