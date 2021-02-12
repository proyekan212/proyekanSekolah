<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterJadwalPelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_jadwal_pelajarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kelas');
            $table->string('guru');
            $table->string('jenjang');
            $table->integer('kelas_id');
            $table->integer('mapel_id');
            $table->integer('kkm');
            $table->integer('role_id');
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
        Schema::dropIfExists('master_jadwal_pelajarans');
    }
}
