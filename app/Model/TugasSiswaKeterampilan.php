<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TugasSiswaKeterampilan extends Model
{
  

    protected $fillable = [
    	'penilaian_keterampilan_id',
    	'user_id',
    	'filename_path'
    ];

    public function master_keterampilan() {
    	return $this->belongsTo('App\Model\MasterPenilaianKeterampilan', 'penilaian_keterampilan_id', 'id');
    }

    public function nilai_keterampilan() {
    	return $this->hasOne('App\Model\MasterNilaiKeterampilan', 'penilaian_keterampilan_id', 'id');
    }
}
