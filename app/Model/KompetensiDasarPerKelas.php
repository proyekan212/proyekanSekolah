<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KompetensiDasarPerKelas extends Model
{
    protected $table="kompetensi_dasar_per_kelas";
    
     protected $fillable = [
        'kompetensi_dasar_id',
        'kompetensi_inti_id',
        'kelas_mapel_id',
        'semester_id',

    ];

     public function kompetensi_dasar() {

        return $this->belongsTo('App\Model\KompetensiDasar', 'kompetensi_dasar_id', 'id');
    }   
}
