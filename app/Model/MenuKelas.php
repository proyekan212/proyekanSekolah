<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MenuKelas extends Model
{
    protected $table = 'menu_kelas';
    protected $fillable = [
        'id',
        'parent_code',
        'code',
        'name',
        'status',
        'icon',
        'reoder',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
