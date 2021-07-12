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
        Schema::dropIfExists('master_jadwal_pelajarans');
        Schema::create('master_jadwal_pelajarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kelas_id');
            $table->integer('mapel_id');
            $table->integer('current_pertemuan');
            $table->integer('semester_id');
            $table->integer('pertemuan')->default(16);
            $table->integer('hapus')->default(0);
            $table->integer('kkm')->default(75);
            $table->integer('user_id');
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
