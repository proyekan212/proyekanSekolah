<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TugasSiswaPengetahuan extends Model
{
    //

    protected $fillable = [
    	'id',
    	'penilaian_pengetahuan_id',
    	'filename_path',
    	'user_id'
    ];

    public function master_pengetahuan() {
    	return $this->belongsTo('App\Model\MasterPenilaianPengetahuan', 'penilaian_pengetahuan_id', 'id');
    }
}
