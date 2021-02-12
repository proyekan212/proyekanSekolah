<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterJadwalPelajaran extends Model
{
    //
    protected $table = 'master_jadwal_pelajarans';
    protected $fillable = [
        'id',
        'nama_kelas',
        'guru',
        'jenjang',
        'kelas',
        'mata_pelajaran',
        'kkm',
        'created_at',
        'updated_at'
    ];
}
