<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterKelas extends Model
{
    protected $table = 'master_kelas';
    protected $fillable = [
        'id',
        'kode',
        'kelas',
    ];
}
