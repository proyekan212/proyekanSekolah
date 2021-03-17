<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';
    protected $fillable = [
        'id',
        'photo',
        'name',
        'nisn_or_nip',
        'email',
        'user_id',
        'role_id',
        'last_login',
        'mobile_phone',
        'full_address',
        'status'
    ];

    public function role() {
       return $this->belongsTo('App\Model\Role', 'role_id', 'id');
    }

    public function kelas() {
        return $this->belongsTo('App\Model\MasterKelas', 'kelas_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Model\User', 'user_id', 'id');
    }

}
