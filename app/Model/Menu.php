<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $fillable = [
        'id',
        'parent_code',
        'code',
        'name', 
        'status',
        'icon',
        'reoder',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
     public function menu_role() {
        return $this->belongsTo(MenuRole::class, 'menu_id', 'id');
    }
}
