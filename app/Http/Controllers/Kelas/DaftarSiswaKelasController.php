<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use DB;
class DaftarSiswaKelasController extends BaseController
{
    public function DaftarSiswaKelasGet(Request $request){
        return view('pages.kelas.daftarsiswakelas');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
