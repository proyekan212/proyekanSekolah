<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RombelKelas extends Model
{
    //

    protected $table = 'rombel_kelas';

    protected $fillable = [
        'id',
        'jurusan_id',
        'name'
    ];

    public function jurusan() {

        return $this->belongsTo('App\Model\MasterJurusan', 'jurusan_id', 'id');
    }
}
