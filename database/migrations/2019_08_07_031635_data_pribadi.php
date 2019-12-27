<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataPribadi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pribadi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pengajuan')->nullable(true);
            $table->text('alamat_ktp')->nullable(true);
            $table->text('alamat_tempat_tinggal')->nullable(true);
            $table->string('kecamatan')->nullable(true);
            $table->string('kelurahan')->nullable(true);
            $table->string('kode_pos')->nullable(true);
            $table->string('kepemilikan_rumah')->nullable(true);
            $table->string('no_tlp')->nullable(true);
            $table->string('no_hp')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('pekerjaan')->nullable(true);
            $table->string('agama')->nullable(true);
            $table->string('status_pernikahan')->nullable(true);
            $table->string('pendidikan_terakhir')->nullable(true);
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
        Schema::dropIfExists('data_pribadi');
    }
}