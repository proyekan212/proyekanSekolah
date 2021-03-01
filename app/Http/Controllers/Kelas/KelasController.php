<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\MasterKelas;
use DB;
class KelasController extends BaseController
{
    public function index(Request $request){
        $kelas = MasterKelas::where('id', $request->session()->get('kelas_id'))->first();
        return view('pages.kelas.dashboard', [
            'kelas' => $kelas
        ]);
    }


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show ($id) {
        return redirect('kelas');
    }

    public function store(Request $request) {
        $request->session()->put('kelas_id', $request->input('kelas_id'));

        return redirect('kelas');
    }
}
