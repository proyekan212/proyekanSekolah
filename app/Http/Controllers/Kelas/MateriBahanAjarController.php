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
        return view('pages.kelas.teacher.materi');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request) {
        MateriBahanBelajar::create([
            'link' => $request->input('link'),
            'name' => $request->input('name'),
            'sender_id' => $request->user()->id,
            'kelas_id' => 1,
            'created_at' => time(),
        ]);
    }
}


