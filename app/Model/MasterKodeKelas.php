<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterKodeKelas extends Model
{
    protected $fillable = [
        'id',
        'kode',
        'name',
        'numerik',
    ];
}
