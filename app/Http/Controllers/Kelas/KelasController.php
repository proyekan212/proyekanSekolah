<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use DB;
class KelasController extends BaseController
{
    public function KelasGet(Request $request){
        return view('pages.kelas.dashboard');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
