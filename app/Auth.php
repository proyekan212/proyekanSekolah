<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Config;

class Auth extends Model
{
    const SIGN = 'LOGIN_SIGNATURE';

    public static function register($params)
    {
        $user           = $params['user'];
        $pass           = $params['pass'];
        $password_hash  = Hash::make($pass . Config::get(self::SIGN) . $user);
        
        return $password_hash;
    }

    public static function login($user, $pass){
        $q  = " select password, id";
        $q .= " from x_users_login";
        $q .= " where username = ?";
        $q .= " and deleted_at is null;";

        $password_hash  = collect(DB::select($q, [$user]))->first();
        
        if ($password_hash == NULL) return false;
        $userid         = $password_hash->id;
        $password_hash  = $password_hash->password;
        
        if (!Hash::check($pass . Config::get(self::SIGN) . $user, $password_hash)) return false;

        $token          = Auth::token($userid, 'create');
        if (!$token) return false;

        $q  = " select ul.id user_id, r.id role_id, ul.token";
        $q .= " from x_users_login ul, x_role r";
        $q .= " where ul.username = ?";
        $q .= " and ul.role_id = r.id";
        $q .= " and ul.deleted_at is null";
        $q .= " and r.deleted_at is null;";

        $query = collect(DB::select($q, [$user]))->first();
        if (!$query) return false;
        return $query;
    }

    public static function getUserId($email){
        $q  = " select id";
        $q .= " from x_users_login";
        $q .= " where username = ?";
        
        $query = collect(DB::select($q, [$email]))->first();
        if (!$query) return false;
        return $query->id;
    }

    public static function token($userid, $status)
    {
        switch ($status) {
            case 'create':
                $token = Auth::create_token($userid);
                if (!$token) return false;
                return $token;
                break;
            case 'read':
                $token = Auth::read_token($userid);
                if (!$token) return false;
                return $token;
                break;
            case 'delete':
                $token = Auth::delete_token($userid);
                if (!$token) return false;
                return true;
                break;
            default:
                return false;
                break;
        }
    }

    public static function create_token($userid)
    {
        $token          = Hash::make(self::SIGN . $userid);

        $q  = " UPDATE x_users_login ";
        $q .= " SET token = ?";
        $q .= " WHERE id = ?";
        $q .= " AND deleted_at IS NULL";
        $query = DB::update($q, [$token, $userid]);
        if ($query == 0) return false;
        return $token;
    }

    public static function read_token($userid)
    {
        $q              = "SELECT token FROM x_users_login ";
        $q             .= "WHERE id = ? ";
        $q             .= "AND deleted_at IS NULL";
        $token          = collect(DB::select($q, [$userid]))->first();
        if ($token == NULL) return false;
        $token          = $token->token;

        return $token;
    }

    public static function delete_token($useridWithToken)
    {
        $split          = explode('|', $useridWithToken);
        $userid         = $split[0];
        $token          = $split[1];

        $q              = "UPDATE x_users_login ";
        $q             .= "SET token = NULL ";
        $q             .= "WHERE id = ? AND token = ? ";
        $q             .= "AND deleted_at IS NULL";
        $query          = DB::update($q, [$userid, $token]);
        if ($query == 0) return false;
        return true;
    }

    public function resetPassword(){
        return true;
    }
}
