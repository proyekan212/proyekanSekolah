<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterPenilaianKeterampilan extends Model
{
    protected $fillable = [
        'id',
        'nama_penilaian',
        'skema',
        'kompetensi_dasar',
        'keterangan',
        'mulai_pengerjaan',
        'finish_pengerjaan'
    ];

    public function kd () {
        $data = explode(',',strval($this->kompetensi_dasar));

        $kompetensi_dasar = "";

        foreach($data as $row) {

        }

        return $kompetensi_dasar;
        
    }


}
