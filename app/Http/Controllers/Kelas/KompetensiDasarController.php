<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use DB;
class KompetensiDasarController extends BaseController
{
    public function KompetensiDasarGet(Request $request){
        return view('pages.kelas.kompetensidasar');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
