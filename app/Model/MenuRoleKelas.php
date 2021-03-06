<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MenuRoleKelas extends Model
{
    protected $fillable = [
        'id',
        'menu_id',
        'role_id',
    ] ;

    public function menu() {
        return $this->belongsTo('App\Model\MenuKelas', 'menu_id', 'id');
    }
}
