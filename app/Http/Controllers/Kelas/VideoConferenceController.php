<?php

namespace App\Http\Controllers\Kelas;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use DB;
class VideoConferenceController extends BaseController
{
    public function VideoConferenceGet(Request $request){
        return view('pages.kelas.videoconference');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
