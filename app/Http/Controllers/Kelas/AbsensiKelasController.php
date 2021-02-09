<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use DB;
class AbsensiKelasController extends BaseController
{
    public function AbsensiKelasGet(Request $request){
        return view('pages.kelas.absensikelas');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
