<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterRpp extends Model
{
    protected $table = 'master_rpps';

    protected $fillable = [
        'id',
        'kelas_id',
        'name',
        'name_file',
        'created_at'
    ];
}
