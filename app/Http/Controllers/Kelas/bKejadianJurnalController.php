<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\User;
use DB;
class KejadianJurnalController extends BaseController
{
    public function KejadianJurnalGet(Request $request){

        $user = User::all();

        return view('pages.kelas.kejadianjurnal', [
            "user"=> $user,
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request) {

    }
}
