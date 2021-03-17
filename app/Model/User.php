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
        'id',
        'username',
        'password',
        'token',
        'created_at',
        'updated_at',
        'deleted_at',
        'verification_token'
    ];

    public function role() {
        return $this->belongsTo('App\Model\Role');
    }

    public function user_detail () {
        return $this->hasOne('App\Model\UserDetail', 'user_id', 'id');
    }



}
