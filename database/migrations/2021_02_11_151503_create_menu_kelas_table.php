<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_kelas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('parent_code');
            $table->string('code');
            $table->string('name');
            $table->string('status');
            $table->string('icon');
            $table->string('reorder');
            $table->timestamps();
            $table->timestamps('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_kelas');
    }
}
