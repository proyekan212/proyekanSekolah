<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriBahanBelajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materi_bahan_belajars', function (Blueprint $table) {
            $table->id();
            $table->string('link');
            $table->string('name');
            $table->integer('hapus')->default(0);
            $table->integer('rating')->default(0);
            $table->integer('sender_id');
            $table->integer('kelas_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materi_bahan_belajars');
    }
}
