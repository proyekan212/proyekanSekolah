<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DaftarKelas extends Model
{
    protected $table = 'daftar_kelas';

    protected $fillable = [
        'id',
        'kelas_id',
        'rombel_id',
        'user_id'
    ];

    public function kelas () {
       return $this->belongsTo('App\Model\MasterKelas', 'kelas_id', 'id');    
    }

    public function rombel() {
      return  $this->belongsTo('App\Model\RombelKelas', 'rombel_id', 'id');
    }

    public function user() {
       return $this->belongsTo('App\Model\UserDetail', 'user_id', 'id');
    }
}
