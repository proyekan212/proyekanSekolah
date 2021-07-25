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
        'mapel_id',
        'nisn_or_nip',
        'email',
        'tanggal_lahir',
        'tahun_masuk',
        'tempat_lahir',
        'jenis_kelamin',
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
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function mapel() {
        return $this->belongsTo('App\Model\MasterMapel', 'mapel_id', 'id');
    }

    public function daftar_kelas () {
        return $this->hasMany('App\Model\DaftarKelas', 'user_id', 'id');
    }

}
