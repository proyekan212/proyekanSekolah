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


}
