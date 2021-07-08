<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class MateriBahanBelajar extends Model
{
    // Schema::create('materi_bahan_belajars', function (Blueprint $table) {
    //     $table->id();
    //     $table->string('link');
    //     $table->string('name');
    //     $table->integer('rating');
    //     $table->integer('sender_id');
    //     $table->timestamps();
    // });
    //

    protected $table = 'materi_bahan_belajars';
    protected $fillable = [
        'link',
        'name',
        'rating_id',
        'sender_id',
        'descriptions',
        'kelas_id',
        'rating_id',
        'created_at',
        'kelas_mapel_id',
        'type'
    ];

    public function user() {
        return $this->belongsTo('App\Model\UserDetail', 'sender_id', 'id');
    }

    public function kelas() {
        return $this->belongsTo('App\Model\MasterKelas', 'kelas_id', 'id');
    }

    public function kelas_mapel() {
        return $this->belongsTo(MasterJadwalPelajaran::class, 'kelas_mapel_id', 'id');
    }

    public function created_at_FullDate() {
        return Carbon::parse($this->created_at)->format('d F Y');
    }
}
