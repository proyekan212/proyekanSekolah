<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterNilaiPengetahuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_nilai_pengetahuans', function (Blueprint $table) {
            $table->id();
            $table->integer('penilaian_pengetahuan_id');
            $table->integer('nilai')->default(0);
            $table->integer('remidi')->nullable(true);
            $table->text('feedback')->blank(true);

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
        Schema::dropIfExists('master_nilai_pengetahuans');
    }
}
