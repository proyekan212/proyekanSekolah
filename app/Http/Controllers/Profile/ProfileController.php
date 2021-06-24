<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Auth;
use App\Model\UserDetail;
use App\Model\Role;
use DB;
use App\Model\MasterMapel;
use App\Model\User;
use Illuminate\Support\Facades\Hash;

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
    public function edit_password(Request $request, $id)
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

        return view('pages.profile.edit_password')->with($params);

    }
    public function update_password_user(Request $request, $id)
    {
        $data = $request->all();
        
       $user = User::where('id', $id)->update([
            'username' => $data['nip'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('dashboard');
        

    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
