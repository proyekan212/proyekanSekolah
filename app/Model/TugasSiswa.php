<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TugasSiswa extends Model
{
    //

    protected $fillable = [
        'id',
        'user_id',
        'kompetensi_dasar_id',
        'penilaian_id',
        'file_path',
    ];

    public function tugas_pengetahuan () {
        return $this->belongsTo('App\Model\MasterPenilaianPengetahuan', 'penilaian_id', 'id');
    }

    public function tugas_keterampilan () {
        return $this->belongsTo('App\Model\MasterPenilaianKeterampilan', 'penilaian_id', 'id');
    }
}
