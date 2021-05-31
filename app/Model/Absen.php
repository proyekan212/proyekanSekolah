<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    
    protected $fillable = [

    	'id',
    	'kelas_mapel_id',
    	'pertemuan',
		'siswa_id',
    	'absen_at',
    	'status'
    ];

    public function kelas_mapel() {
    	return $this->belongsTo('App\Model\MasterJadwalPelajaran', 'kelas_mapel_id', 'id');


    }
    public function user_detail() {

    	return $this->belongsTo('App\Model\UserDetail', 'user_detail_id', 'id');

    }

	public function absen_by_pertemuan($pertemuan) {
		return $this->pertemuan === $pertemuan;
	}
}
