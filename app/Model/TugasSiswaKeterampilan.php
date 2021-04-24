<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TugasSiswaKeterampilan extends Model
{
  

    protected $fillable = [
        'id',
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

    // public function nilai_by_siswa_id(Builder $query, $user_id) {
    //     return $query->where('user_id', $user_id );
    // }
}
