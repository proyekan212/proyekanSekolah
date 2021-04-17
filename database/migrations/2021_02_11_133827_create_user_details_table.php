<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo')->nullable(true);
            $table->string('name');
            $table->string('jenis_kelamin')->nullable(true);
            $table->string('tempat_lahir')->nullable(true);
            $table->date('tanggal_lahir')->nullable(true);
            $table->string('nisn_or_nip')->unique(true);
            $table->string('tahun_masuk')->nullable(true);
            $table->string('email')->nullable(true);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('role_id');
            $table->timestamp('last_login');
            $table->integer('mapel_id')->nullable(true);
            $table->integer('kelas_id')->nullable(true);
            $table->string('mobile_phone')->nullable(true);
            $table->string('full_address')->nullable(true);
            $table->integer('status')->default(0);
            $table->timestamps();
            // $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
