<?php

namespace App\Model;

use Hamcrest\Type\IsNumeric;
use Illuminate\Database\Eloquent\Model;


class MasterPenilaianKeterampilan extends Model
{
    protected $fillable = [
        'id',
        'nama_penilaian',
        'skema',
        'kompetensi_dasar',
        'keterangan',
        'kelas_mapel_id',
        'hapus',
        'mulai_pengerjaan',
        'finish_pengerjaan'
    ];

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
}
