<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterKompetensiInti extends Model
{
    protected $table = 'master_kompetensi_intis';

    protected $fillable = [
        'id',
        'name'

    ];

    public function kompetensi_dasar() {

        return $this->hasMany('App\Model\KompetensiDasar', 'kompetensi_inti_id', 'id');
    }
}
