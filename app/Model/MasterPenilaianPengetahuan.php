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
        'kompetensi_dasar',
        'penilaian_harian',
        'instruksi',
        'mulai_pengerjaan',
        'finish_pengerjaan'
    ];
}
