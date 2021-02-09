<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use DB;
class KejadianJurnalController extends BaseController
{
    public function KejadianJurnalGet(Request $request){
        return view('pages.kelas.kejadianjurnal');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
