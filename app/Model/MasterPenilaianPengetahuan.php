<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class MasterPenilaianPengetahuan extends Model
{
    //
    protected $table = 'master_penilaian_pengetahuans';
    protected $fillable = [
        'id',
        'hapus',
        'pertemuan',
        'kelas_mapel_id',
        'skema_id',
        'kompetensi_dasar_id',
        'penilaian_harian',
        'instruksi',
        'mulai_pengerjaan',
        'finish_pengerjaan',
        'created_at'
    ];

    protected $dates = [
        'created_at'
    ];

    public function kompetensi_dasar () {
        return $this->belongsTo('App\Model\KompetensiDasar', 'kompetensi_dasar_id', 'id');
    }

 public function jadwal_pelajaran() {
        return $this->belongsTo('App\Model\MasterJadwalPelajaran', 'kelas_mapel_id', 'id');
    }

    public function kelas_mapel() {
        return $this->belongsTo('App\MasterJadwalPelajaran', 'kelas_mapel_id', 'id');
    }

    public function tugas_pengetahuan() {
        return $this->hasMany('App\Model\TugasSiswaPengetahuan', 'penilaian_pengetahuan_id', 'id');
    }
       public function nilai() {
        return $this->hasMany('App\Model\MasterNilaiPengetahuan', 'penilaian_pengetahuan_id', 'id');
    }

    public function nilai_siswa($user_id){
        return $this->nilai()->where('user_detail_id', $user_id)->first();
    }

    public function tugas_siswa($user_id){
       
        return $this->tugas_pengetahuan()->where('user_id', $user_id)->first();
    }

    public function dateCreated() {
        return $this->created_at;
    }

    public function skema() {
        return $this->belongsTo(MasterSkemaPengetahuan::class, 'skema_id', 'id');
    }
}
