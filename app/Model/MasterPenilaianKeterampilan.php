<?php

namespace App\Model;

use Hamcrest\Type\IsNumeric;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MasterPenilaianKeterampilan extends Model
{
    protected $fillable = [
        'id',
        'nama_penilaian',
        'skema_id',
        'kompetensi_dasar',
        'keterangan',
        'kelas_mapel_id',
        'hapus',
        'mulai_pengerjaan',
        'finish_pengerjaan',
       
    ];

    protected $dates = [
        'mulai_pengerjaan',
        'finish_pengerjaan'
    ];

    public function skema() {
        return $this->belongsTo('App\Model\MasterSkemaKeterampilan', 'skema_id', 'id');
    }

    public function kd () {
        $data = explode(',',strval($this->kompetensi_dasar));
        
        $kompetensi_dasar = array();

        foreach($data as $row) {
            if(is_numeric($row)) {
                array_push($kompetensi_dasar,KompetensiDasar::where('id', $row)->first());
                
            }
        }
        return $kompetensi_dasar;
        
    }

    public function jadwal_pelajaran() {
        return $this->belongsTo('App\Model\MasterJadwalPelajaran', 'kelas_mapel_id', 'id');
    }

    public function tugas_keterampilan() {
        return $this->hasMany('App\Model\TugasSiswaKeterampilan', 'penilaian_keterampilan_id', 'id');
    }

    public function nilai() {
        return $this->hasMany('App\Model\MasterNilaiKeterampilan', 'penilaian_keterampilan_id', 'id');
    }

    public function total() {
        return $this->nilai()->select(DB::raw('sum(nilai)'));
    }

    public function nilai_siswa($user_id) {
        
        return $this->nilai()->where('user_detail_id', $user_id)->first();
    }

    public function tugas_siswa($user_id){
        return $this->tugas_keterampilan()->where('user_id', $user_id)->first();
    }

 



    
}
