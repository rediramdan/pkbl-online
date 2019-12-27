<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgunanSph extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agunan_sph', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pengajuan')->nullable(true);
            $table->string('no_sph')->nullable(true);
            $table->string('nama_sph')->nullable(true);
            $table->string('alamat_sph')->nullable(true);
            $table->string('luas_sph')->nullable(true);
            $table->string('tanggal_terbit')->nullable(true);
            $table->string('wilayah_p')->nullable(true);
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
        Schema::dropIfExists('agunan_sph');
    }
}