<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class AuthController extends BaseController
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);;
    }

    public function loginView()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        try {
            if (Auth::guard()->attempt($request->only('username', 'password'),  $request->filled('remember'))) {
                return redirect()->intended('/dashboard');
            }
            return redirect()->route('login')->with('error', 'Login Fail, Invalid Email/Password');
        } catch (\Throwable $th) {
            return redirect()->route('login')->with('error', 'Login Fail, Invalid Email/Password');
        }
    }
    
    public function register(Request $request)
    {
        User::create([
            'username' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role_id' => 1,
        ]);
        return redirect()->route('login')->with('error', 'Login Fail, Invalid Email/Password');
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login');
    }
    
    public function resetPasswordView()
    {
        return view('pages.auth.reset');
    }

    public function resetPassword(Request $request)
    {
        $user = User::where('username', $request->username)->first();
        if ($user == null) {
            return redirect()->back()->with('failed', 'email not found');
        }
        $token = Str::uuid()->getHex();
        $user->update([
            'verification_token' => $token
        ]);
        $data = [
            'action_url' => URL::to('/') . '/verify/reset-password?token=' . $token,
            'email_address' => $user->username,
            'operating_system' => $this->getOs(),
            'browser_name' => $this->getBrowser()
        ];
        Mail::to($user->username)->send(new \App\Mail\ResetPasswordMail($data));
        return redirect()->back()->with('success', 'Requested reset password successfully, please check your email');
    }

    public function verifyResetPassword(Request $request)
    {
        $token = $request->token;
        $user = User::where('verification_token', $token)->first();
        if ($user == null) {
            return redirect()->route('login')->with('failed', 'Invalid / expire token');
        }
        return view('pages.auth.update-password', ['token' => $token]);
    }

    public function updateNewPassword(Request $request)
    {
        $validate = $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);
        $token = $request->token;
        $user = User::where('verification_token', $token)->first();
        if ($user == null) {
            return redirect()->route('login')->with('failed', 'Invalid / expire token');
        }
        $user->update([
            'password' => bcrypt($request->password),
            'verification_token' => null
        ]);
        return redirect()->route('login')->with('success', 'Successfully changed password, please login using new password');
    }
    
    public function resetPasswordGet(){
        return view('pages.auth.reset');
    }
    
    public function resetPasswordPost(){
        return redirect()->route('login');
    }

    private function getOS() { 

        global $user_agent;
    
        $os_platform  = "Unknown OS Platform";
    
        $os_array     = array(
                              '/windows nt 10/i'      =>  'Windows 10',
                              '/windows nt 6.3/i'     =>  'Windows 8.1',
                              '/windows nt 6.2/i'     =>  'Windows 8',
                              '/windows nt 6.1/i'     =>  'Windows 7',
                              '/windows nt 6.0/i'     =>  'Windows Vista',
                              '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                              '/windows nt 5.1/i'     =>  'Windows XP',
                              '/windows xp/i'         =>  'Windows XP',
                              '/windows nt 5.0/i'     =>  'Windows 2000',
                              '/windows me/i'         =>  'Windows ME',
                              '/win98/i'              =>  'Windows 98',
                              '/win95/i'              =>  'Windows 95',
                              '/win16/i'              =>  'Windows 3.11',
                              '/macintosh|mac os x/i' =>  'Mac OS X',
                              '/mac_powerpc/i'        =>  'Mac OS 9',
                              '/linux/i'              =>  'Linux',
                              '/ubuntu/i'             =>  'Ubuntu',
                              '/iphone/i'             =>  'iPhone',
                              '/ipod/i'               =>  'iPod',
                              '/ipad/i'               =>  'iPad',
                              '/android/i'            =>  'Android',
                              '/blackberry/i'         =>  'BlackBerry',
                              '/webos/i'              =>  'Mobile'
                        );
    
        foreach ($os_array as $regex => $value)
            if (preg_match($regex, $user_agent))
                $os_platform = $value;
    
        return $os_platform;
    }
    
    private function getBrowser() {
    
        global $user_agent;
    
        $browser        = "Unknown Browser";
    
        $browser_array = array(
                                '/msie/i'      => 'Internet Explorer',
                                '/firefox/i'   => 'Firefox',
                                '/safari/i'    => 'Safari',
                                '/chrome/i'    => 'Chrome',
                                '/edge/i'      => 'Edge',
                                '/opera/i'     => 'Opera',
                                '/netscape/i'  => 'Netscape',
                                '/maxthon/i'   => 'Maxthon',
                                '/konqueror/i' => 'Konqueror',
                                '/mobile/i'    => 'Handheld Browser'
                         );
    
        foreach ($browser_array as $regex => $value)
            if (preg_match($regex, $user_agent))
                $browser = $value;
    
        return $browser;
    }
    
}
