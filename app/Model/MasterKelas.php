<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterKelas extends Model
{
    protected $table="master_kelas";

    protected $fillable = [
        'kode',
        'kelas',
        'id'
    ];

    public function daftar_kelas() {
        return $this->belongsToMany('App\Model\DaftarKelas');
    }
}
