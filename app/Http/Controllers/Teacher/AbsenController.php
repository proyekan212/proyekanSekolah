<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use DB;
class AbsenController extends BaseController
{
    public function absenGet(Request $request){
        return view('pages.teacher.absen');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
