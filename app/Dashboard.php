<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Dashboard extends Model
{
    public static function getMenu($roleid){
        $q  = " select m.parent_code, m.code, m.name, m.status, m.icon";
        $q .= " from menu m, role r, menu_role mr";
        $q .= " where mr.role_id = ?";
        $q .= " and mr.role_id = r.id";
        $q .= " and mr.menu_id = m.id";
        $q .= " and m.deleted_at is null";
        $q .= " and r.deleted_at is null";
        $q .= " and mr.deleted_at is null";
        $q .= " order by m.reorder;";
        
        $query = DB::select($q, [$roleid]);
        return $query;
    }
}
