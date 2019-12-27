<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataPenerusKewajiban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penerus_kewajiban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pengajuan')->nullable(true);
            $table->string('nama_lengkap')->nullable(true);
            $table->string('hubungan_keluarga')->nullable(true);
            $table->string('pekerjaan')->nullable(true);
            $table->text('alamat')->nullable(true);
            $table->string('kota')->nullable(true);
            $table->string('kecamatan')->nullable(true);
            $table->string('kelurahan')->nullable(true);
            $table->string('no_tlp')->nullable(true);
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
        Schema::dropIfExists('data_penerus_kewajiban');
    }
}