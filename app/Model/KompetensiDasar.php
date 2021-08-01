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

    public function kompetensi_dasar_mapel() {

        return $this->hasMany('App\Model\KompetensiDasarKelasMapel', 'kelas_mapel_id', 'id');
    }

    public function kompetensi_inti() {

        return $this->belongsTo('App\Model\MasterKompetensiInti', 'kompetensi_inti_id', 'id');
    }    

    public function semester() {
        return $this->belongsTo('App\Model\MasterSemester', 'semester_id', 'id');
    }

    public function penilaian_pengetahuan() {
        return $this->hasMany(MasterPenilaianPengetahuan::class, 'kompetensi_dasar_id', 'id');
    }

    public function penilaian_keterampilan () {
        return $this->hasMany(KeterampilanKompetensiDasar::class, 'kd_id', 'id');
    }

}
