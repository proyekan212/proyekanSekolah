<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use DB;
class MateriBahanAjarController extends BaseController
{
    public function MateriBahanAjarGet(Request $request){
        return view('pages.teacher.materi');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
