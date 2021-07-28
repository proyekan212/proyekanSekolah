<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKompetensiDasarPerKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetensi_dasar_per_kelas', function (Blueprint $table) {
            $table->id();
            $table->integer('kelas_mapel_id');
            $table->integer('kompetensi_dasar_id');
            $table->integer('kompetensi_inti_id');
            $table->integer('semester_id');
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
        Schema::dropIfExists('kompetensi_dasar_per_kelas');
    }
}
