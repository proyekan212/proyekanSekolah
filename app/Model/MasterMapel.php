<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MasterMapel extends Model
{
    //
    protected $fillable = [
        'id',
        'nama_mapel',
        'jurusan_id',
        'kkm_id'
    ];

    public function jurusan () {
        return $this->belongsTo('App\Model\MasterJurusan', 'jurusan_id', 'id');
    }

    public function kkm() {
        return $this->belongsTo('App\Model\MasterKKM', 'kkm_id', 'id');
    }
}
