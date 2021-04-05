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
    	'feedback',
    	'penilaian_keterampilan_id'
    ];


    public function tugas_siswa_keterampilan() {

    	return $this->belongsTo('App\Model\TugasSiswaKeterampilan', 'penilaian_keterampilan_id', 'id' );
    }

}
