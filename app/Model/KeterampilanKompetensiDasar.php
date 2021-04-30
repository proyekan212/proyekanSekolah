<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KeterampilanKompetensiDasar extends Model
{
    protected $fillable = [
        'id',
        'kd_id',
        'keterampilan_id',
    ];

    public function penilaian_keterampilan () {
        return $this->belongsTo(MasterPenilaianKeterampilan::class, 'keterampilan_id', 'id');
    }

    public function kompetensi_dasar() {
        return $this->belongsTo(KompetensiDasar::class, 'kd_id', 'id');
    }
}
