<?php

namespace App\Model;
use App\User;

use Illuminate\Database\Eloquent\Model;

class TeacherNotifications extends Model
{

    protected $fillable = [
        'kelas_mapel_id',
        'read',
        'siswa_id',
        'description',
        'guru_id',
        
    ];

    public function siswa() {
        return $this->belongsTo(User::class, 'siswa_id', 'id');
    }

    public function kelas_mapel () {
        return $this->belongsTo(MasterJadwalPelajaran::class, 'kelas_mapel_id', 'id');
    }
}
