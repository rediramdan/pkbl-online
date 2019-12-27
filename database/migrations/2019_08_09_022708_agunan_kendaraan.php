<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgunanKendaraan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agunan_kendaraan', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->integer('id_pengajuan')->nullable(true);
            $table->string('no_bpkb')->nullable(true);
            $table->string('no_polisi')->nullable(true);
            $table->string('no_rangka')->nullable(true);
            $table->string('no_mesin')->nullable(true);
            $table->string('jenis_kendaraan')->nullable(true);
            $table->string('nama_pemilik')->nullable(true);
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
        Schema::dropIfExists('agunan_kendaraan');
    }
}