<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen_gurus', function (Blueprint $table) {
            $table->id();
            $table->integer('kelas_mapel_id');
            $table->integer('guru_id');
            $table->integer('pertemuan');
            $table->string('status')->nullable(true);
            $table->timestamp('absen_at')->nullable(true);
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
        Schema::dropIfExists('absen_gurus');
    }
}
