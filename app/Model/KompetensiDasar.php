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
}
