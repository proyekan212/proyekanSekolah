<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\MasterKompetensiInti;
use DB;
class KompetensiDasarController extends BaseController
{
    public function index(){
        return view('pages.kelas.kompetensidasar', [
            'kompetensi_inti' => MasterKompetensiInti::all(),
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
