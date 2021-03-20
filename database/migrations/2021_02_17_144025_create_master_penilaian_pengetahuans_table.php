<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterPenilaianPengetahuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_penilaian_pengetahuans', function (Blueprint $table) {
            $table->id();
            $table->string('pertemuan');
            $table->string('skema_penilaian');
            $table->integer('kompetensi_dasar_id');
            $table->integer('penilaian_harian');
            $table->text('instruksi');
            $table->integer('kelas_mapel_id');
            $table->smallInteger('hapus')->default(0);
            $table->timestamp('mulai_pengerjaan')->nullable();
            $table->timestamp('finish_pengerjaan')->nullable();
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
        Schema::dropIfExists('master_penilaian_pengetahuans');
    }
}
