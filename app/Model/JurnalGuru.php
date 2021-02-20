<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class JurnalGuru extends Model
{
    protected $table="jurnal_gurus";
    protected $fillable = [
        'id',
        'waktu',
        'kelas_id',
        'hapus',
        'pertemuan',
        'materi'
    ];
}
