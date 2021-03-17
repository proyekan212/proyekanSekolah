<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MasterSemester extends Model
{
	protected $table = 'master_semesters';
	protected $fillable = [
        'id',
        'nama_semester',
        
    ];
}
