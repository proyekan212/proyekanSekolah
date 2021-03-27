<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterKejadianJurnal extends Model
{
    protected $table = 'master_kejadian_jurnals';
    protected $fillable = [
        'id',
        'user_id',
        'waktu',
        'kejadian', 
        'butir_sikap',
        'tindakan',
        'tindak_lanjut',
        'kelas_mapel_id',
        'hapus',
    ];

    public function siswa() {
        return $this->belongsTo('App\Model\UserDetail', 'user_id', 'id');
    }

    public function kelas_mapel() {
        return $this->belongsTo('App\Model\MasterJadwaPelajaran', 'kelas_mapel_id', 'id');
    }

}
