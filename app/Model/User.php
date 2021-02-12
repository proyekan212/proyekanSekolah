<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    //
    // use Notifiable, HasApiTokens;
    //
    protected $table = 'users';
    protected $fillable = [
        'username',
        'password',
        'token',
        'role_id', 
        'created_at',
        'updated_at',
        'deleted_at',
        'verification_token'
    ];
}
