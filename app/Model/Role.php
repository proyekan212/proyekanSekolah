<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";
    protected $fillable = [
        'name_role',
        'id'
    ];

    // public function users() {
    //     return $this->hasMany('App\Model\User');
    // }
}
