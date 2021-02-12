<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterJurusan extends Model
{
    protected $table = 'master_jurusan';
    protected $fillable = [
        'id',
        'jurusan',
    ];
}
