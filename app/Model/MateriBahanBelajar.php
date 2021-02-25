<?php

namespace App\Model;

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
        'kelas_id',
        'rating_id'
    ];
}
