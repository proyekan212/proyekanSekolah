<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\UserDetail;
use App\Model\Role;
use DB;
use App\Model\MasterMapel;

class ProfileController extends BaseController
{
    public function ProfileGet(Request $request, $id)
    {
        $user = UserDetail::where('user_id',$id)->first();
        $user_email         = $user->username;
        $user_roleid        = $user->role_id;
        $mapel = MasterMapel::where('hapus', 0)->get();
        $params = [
            'showUserDetail'    => $user,
            'mapel'    => $mapel,
            'showRole'          => Role::where('id', $user_roleid)->first(),
        ];

        return view('pages.profile.profile')->with($params);
      
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
