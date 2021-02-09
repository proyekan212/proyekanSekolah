<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use DB;
class PenilaianSemesterController extends BaseController
{
    public function RppGet(Request $request){
        return view('pages.kelas.PenilaianSemester');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
