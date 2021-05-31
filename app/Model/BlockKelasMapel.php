<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BlockKelasMapel extends Model
{
    
    protected $fillable = [
        'id',
        'kelas_mapel_id',
        'daftar_kelas_id',
    ];


    public function kelas_mapel(){

        return $this->belongsTo(MasterJadwalPelajaran::class, 'kelas_mapel_id', 'id');
    }

    public function siswa_kelas() {
        return $this->belongsTo(DaftarKelas::class, 'daftar_kelas_id', 'id');
    }
}
