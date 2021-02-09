<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'users_detail';
    protected $fillable = [
        'id',
        'photo',
        'name',
        'email', 
        'last_login',
        'mobile_phone',
        'full_address',
        'role_id',
        'status',
        'updated_at',
    ];
}
