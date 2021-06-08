<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterKelas extends Model
{
    protected $table="master_kelas";

    protected $fillable = [
        'kode_kelas_id',
        'jurusan_id',
        'kelas',
        'id'
    ];

    public function daftar_kelas() {
        return $this->hasMany('App\Model\DaftarKelas', 'kelas_id', 'id');
    }

    public function kode_kelas() {
        return $this->belongsTo('App\Model\MasterKodeKelas', 'kode_kelas_id', 'id');
    }

    public function jurusan(){
        return $this->belongsTo(MasterJurusan::class, 'jurusan_id', 'id');
    }
}
