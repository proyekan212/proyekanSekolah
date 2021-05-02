<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SettingSemester extends Model
{
    //
    protected $fillable = [
        'id',
        'tahun_akademik_id',
        'semester_id'
    ];

    public function semester() {
        return $this->belongsTo(MasterSemester::class, 'semester_id', 'id');
    }

    public function tahun_akademik() {
        return $this->belongsTo(TahunAkademik::class, 'tahun_akademik_id', 'id');
    }
}
