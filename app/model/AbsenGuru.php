<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class AbsenGuru extends Model
{
    protected $fillable = [

    	'id',
    	'kelas_mapel_id',
    	'pertemuan',
		'guru_id',
    	'absen_at',
    	'status'
    ];

    public function kelas_mapel() {
    	return $this->belongsTo('App\Model\MasterJadwalPelajaran', 'kelas_mapel_id', 'id');


    }
    public function user_detail() {

    	return $this->belongsTo('App\Model\UserDetail', 'guru_id', 'id');

    }

	
}
