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
       return $this->belongsTo('App\Model\Kelas', 'kelas_id', 'id');    
    }

    public function rombel() {
      return  $this->belongsTo('App\Model\RombelKelas', 'rombel_id', 'id');
    }

    public function user_detail() {
       return $this->belongsTo('App\Model\UserDetail', 'user_id', 'id');
    }

    public function blocklist() {
      return $this->hasMany(BlockKelasMapel::class, 'daftar_kelas_id', 'id');
    }

    public function block_from_mapel($kelas_mapel) {

      return $this->blocklist()->where('kelas_mapel_id', $kelas_mapel)->first();
    }

    public function absen(){
      return $this->hasMany(Absen::class, 'siswa_id', 'id');
    }

    public function absen_by_pertemuan($pertemuan) {
      $absen = $this->absen()->where([
        // ['kelas_mapel_id', '=', $kelas_mapel ],
        ['pertemuan', '=', $pertemuan]
      ]);

      if($absen) {
        return $absen->first();
      }
      
      return null ;
    }
}
