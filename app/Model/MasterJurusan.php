<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterJurusan extends Model
{
    protected $table = 'master_jurusans';

    protected $fillable = [
        'id',
        'jurusan'
    ];
}
