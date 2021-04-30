<?php

namespace App\Model;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class MasterSkemaPengetahuan extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
    ];

    public function penilaian_pengetahuan() {
        return $this->hasMany(MasterPenilaianPengetahuan::class, 'skema_id', 'id');
    }

    public function by_siswa($user_id, $kd) {

        
        $nilai = $this->penilaian_pengetahuan()
        ->where('kompetensi_dasar_id', $kd)
        ->withCount(['nilai as total' => function($q) use($user_id){
            $q->where('user_detail_id', $user_id);
            $q->select(DB::raw('sum(nilai)'))  ; 
        }])
        ->get();
        
        

        $total = $nilai->sum('total');
      
        
        return $total;


    }
}
