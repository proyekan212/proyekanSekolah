<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use DB;
class MateriController extends BaseController
{
    public function materiGet(Request $request){
        return view('pages.teacher.materi');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
