<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    

    protected $fillable = [
        'tahun_akademik_id',
        'master_kelas_id',
        'rombel_id'
    ];

    public function daftar_kelas() {
        return $this->hasMany('App\Model\DaftarKelas', 'kelas_id', 'id');
    }
    public function rombel() {
       return $this->belongsTo('App\Model\RombelKelas', 'rombel_id', 'id');
    }

    public function master_kelas() {
        return $this->belongsTo('App\Model\MasterKelas', 'master_kelas_id', 'id');
    }

    public function tahun_akademik() {
        return $this->belongsTo('App\Model\TahunAkademik', 'tahun_akademik_id', 'id');
    }

    public function jadwal_pelajaran() {
        return $this->hasMany('App\Model\MasterJadwalPelajaran', 'kelas_id', 'id');
    }

    public function jadwal_pelajaran_first() {
        return $this->jadwal_pelajaran();
    }
}
