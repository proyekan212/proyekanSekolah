<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'role';
    protected $fillable = [
        'id',
        'name_role',
        'created_at', 
        'updated_at',
        'deleted_at'
    ];
}
