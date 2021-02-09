<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterSemester extends Model
{
    protected $table = 'master_semester';
    protected $fillable = [
        'id',
        'tahun_ajaran',
        'semetser',
        'status',
    ];
}
