<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgunanSertifikat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agunan_sertifikat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pengajuan')->nullable(true);
            $table->string('no_shm')->nullable(true);
            $table->string('nama_shm')->nullable(true);
            $table->string('alamat_shm')->nullable(true);
            $table->string('luas')->nullable(true);
            $table->string('tgl_terbit')->nullable(true);
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
        Schema::dropIfExists('agunan_sertifikat');
    }
}