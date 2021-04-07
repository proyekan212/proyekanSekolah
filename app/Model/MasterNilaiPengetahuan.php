<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterNilaiPengetahuan extends Model
{
   protected $fillable = [
    	'id',
    	'nilai',
    	'remidi',
      'user_detail_id',
    	'feedback',
    	'penilaian_pengetahuan_id'
    ];


    public function penilaian_pengetahuan() {

    	return $this->belongsTo('App\Model\MasterPenilaianPengetahuan', 'penilaian_pengetahuan_id', 'id' );
    }

    public function user_detail(){
      return $this->belongsTo('App\Model\UserDetail', '
        user_detail_id', 'id');
    }
}
