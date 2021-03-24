<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasSiswaKeterampilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas_siswa_keterampilans', function (Blueprint $table) {
            $table->id();
            $table->integer('penilaian_keterampilan_id');
            $table->integer('user_id');
            $table->string('filename_path');
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
        Schema::dropIfExists('tugas_siswa_keterampilans');
    }
}
