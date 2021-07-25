<?php

namespace App\Model;



use Illuminate\Database\Eloquent\Model;
use App\User;

class StudentNotifications extends Model
{
    //


    protected $fillable = [
        'siswa_id',
        'guru_id',
        'descriptions',
        'kelas_mapel_id',
        'read'
    ];

    public function siswa() {
        return $this->belongsTo(User::class, 'siswa_id', 'id');
    }

    public function kelas_mapel () {
        return $this->belongsTo(MasterJadwalPelajaran::class, 'kelas_mapel_id', 'id');
    }
    
    public function guru() {
        return $this->belongsTo(User::class, 'guru_id', 'id');
    }
}
