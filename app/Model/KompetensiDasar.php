<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KompetensiDasar extends Model
{
    protected $table="kompetensi_dasars";

    // $table->string('nama_kompetensi_dasar');
    //         $table->integer('kompetensi_inti_id');
    //         $table->integer('semester_id');
   
    protected $fillable = [
        'id',
        'nama_kompetensi_dasar',
        'kompetensi_inti_id',
        'semester_id'

    ];

    public function kompetensi_inti() {

        return $this->belongsTo('App\Model\MasterKompetensiInti', 'kompetensi_inti_id', 'id');
    }    

    public function semester() {
        return $this->belongsTo('App\Model\MasterSemester', 'semester_id', 'id');
    }


}
