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
        'tindak_lanjut'
    ];

    public function siswa() {
        return $this->belongsTo('App\Model\UserDetail', 'user_id', 'id');
    }

}
