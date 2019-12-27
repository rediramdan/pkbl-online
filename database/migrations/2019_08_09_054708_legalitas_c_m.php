<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LegalitasCM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legalitas_c_m', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_penugasan')->nullable(true);
            $table->string('no_ktp_calon')->nullable(true);
            $table->string('no_kk')->nullable(true);
            $table->string('no_surat_keterangan')->nullable(true);
            $table->string('no_surat_ijin_usaha')->nullable(true);
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
        Schema::dropIfExists('legalitas_c_m');
    }
}