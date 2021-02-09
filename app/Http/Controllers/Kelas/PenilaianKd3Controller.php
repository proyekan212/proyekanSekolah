<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use DB;
class PenilaianKd3Controller extends BaseController
{
    public function RppGet(Request $request){
        return view('pages.kelas.PenilaianKd3');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
