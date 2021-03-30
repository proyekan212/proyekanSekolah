<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    
    protected $fillable = [
<<<<<<< HEAD
    	'id',
    	'kelas_mapel_id',
    	'user_detail_id',
    	'absen_at',
    	'status'
    ];

    public function kelas_mapel() {
    	return $this->belongsTo('App\Model\MasterJadwalPelajaran', 'kelas_mapel_id', 'id');
=======
        'id',
        'kelas_mapel_id',
        'user_detail_id',
        'absen_at',
        'status'
    ];

    public function kelas_mapel() {
        return $this->belongsTo('App\Model\MasterJadwalPelajaran', 'kelas_mapel_id', 'id');
>>>>>>> Nabil

    }

    public function user_detail() {
<<<<<<< HEAD
    	return $this->belongsTo('App\Model\UserDetail', 'user_detail_id', 'id');

    }
}
=======
        return $this->belongsTo('App\Model\UserDetail', 'user_detail_id', 'id');

    }
}
>>>>>>> Nabil
