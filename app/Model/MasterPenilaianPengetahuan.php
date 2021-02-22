<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterPenilaianPengetahuan extends Model
{
    //
    protected $table = 'master_penilaian_pengetahuans';
    protected $fillable = [
        'id',
        'hapus',
        'pertemuan',
        'skema_penilaian',
        'kompetensi_dasar_id',
        'penilaian_harian',
        'instruksi',
        'mulai_pengerjaan',
        'finish_pengerjaan'
    ];

    public function kompetensi_dasar () {
        return $this->belongsTo('App\Model\KompetensiDasar', 'kompetensi_dasar_id', 'id');
    }

    
}
