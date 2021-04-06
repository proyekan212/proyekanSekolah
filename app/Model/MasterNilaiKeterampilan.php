<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterNilaiKeterampilan extends Model
{
    //

      // $table->integer('penilaian_pengetahuan_id');
      //       $table->integer('nilai')->default(0);
      //       $table->integer('remidi')->nullable(true);
      //       $table->text('feedback')->blank(true);

    protected $fillable = [
    	'id',
    	'nilai',
    	'remidi',
      'user_detail_id',
    	'feedback',
    	'penilaian_keterampilan_id'
    ];


    public function penilaian_keterampilan() {

    	return $this->belongsTo('App\Model\MasterPenilaianKeterampilan', 'penilaian_keterampilan_id', 'id' );
    }

    public function user_detail(){
      return $this->belongsTo('App\Model\UserDetail', '
        user_detail_id', 'id');
    }

}
