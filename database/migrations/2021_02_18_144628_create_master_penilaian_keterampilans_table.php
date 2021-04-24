<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterPenilaianKeterampilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_penilaian_keterampilans', function (Blueprint $table) {
            $table->id();
            $table->integer('skema_id');
            $table->string('nama_penilaian');
            $table->text('kompetensi_dasar');
            $table->text('keterangan');
            $table->integer('kelas_mapel_id');
            $table->integer('hapus')->default(0);
            $table->date('mulai_pengerjaan')->nullable();
            $table->date('finish_pengerjaan')->nullable();
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
        Schema::dropIfExists('master_penilaian_keterampilans');
    }
}
