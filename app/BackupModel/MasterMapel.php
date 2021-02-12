<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterMapel extends Model
{
    protected $table = 'master_mapel';
    protected $fillable = [
        'id',
        'kode_mapel',
        'nama_mapel',
    ];
}
