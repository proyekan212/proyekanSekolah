<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Models\UserDetail;
use App\Models\Role;
use DB;

class ProfileController extends BaseController
{
    public function ProfileGet(Request $request)
    {
        $user = $request->user();
        $user_email         = $user->username;
        $user_roleid        = $user->role_id;

        $params = [
            'showUserDetail'    => UserDetail::where('email', $user_email)->first(),
            'showRole'          => Role::where('id', $user_roleid)->first(),
        ];

        return view('pages.profile.profile')->with($params);
    }


    public function __construct()
    {
        $this->middleware('auth');
    }
}
