<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterJadwalPelajaran extends Model
{
    //
    protected $table = 'master_jadwal_pelajarans';
    protected $fillable = [
        'id',
        'nama_kelas',
        'guru',
        'jenjang',
        'kelas',
        'mata_pelajaran',
        'kkm',
        'created_at',
        'updated_at'
    ];

    public function daftar_kelas() {
        return $this->hasMany('App\Model\DaftarKelas', 'kelas_id', 'id');
    }

    public function kode_kelas() {
        return $this->belongsTo('App\Model\MasterKodeKelas', 'kode_kelas_id', 'id');
    }

    public function rombel() {
        return $this->belongsTo('App\Model\RombelKelas', 'rombel_id', 'id');
    }
}
