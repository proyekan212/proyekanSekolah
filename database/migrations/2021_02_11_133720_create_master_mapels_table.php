<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterMapelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::dropIfExists('master_mapels');
        Schema::create('master_mapels', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('kode_mapel');
            $table->string('nama_mapel');
            $table->integer('jurusan_id');
            $table->integer('kkm_id');
            $table->integer('hapus')->default(0);
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
        Schema::dropIfExists('master_mapels');
    }
}
