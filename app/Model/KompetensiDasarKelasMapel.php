<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KompetensiDasarKelasMapel extends Model
{
    //

    protected $fillable = [
        'kompetensi_dasar_id',
        'kelas_mapel_id'
    ];

    public function kelas_mapel() {
        return $this->belongsTo(MasterJadwalPelajaran::class, 'kelas_mapel_id', 'id');
    }

    public function kompetensi_dasar() {
        return $this->belongsTo(KompetensiDasar::class, 'kompetensi_dasar_id', 'id');
    }
}
