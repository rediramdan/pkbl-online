<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IdentitasCM extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas_c_m', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_penugasan')->nullable(true);
            $table->string('no_ref_penilaian')->nullable(true);
            $table->string('tanggal_proposal')->nullable(true);
            $table->string('tanggal_survey')->nullable(true);
            $table->string('nama_calon')->nullable(true);
            $table->string('alamat_usaha')->nullable(true);
            $table->string('kecamatan')->nullable(true);
            $table->string('kelurahan')->nullable(true);
            $table->string('bidang_usaha')->nullable(true);
            $table->string('no_telepon')->nullable(true);
            $table->text('pengalaman_usaha')->nullable(true);
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
        Schema::dropIfExists('identitas_c_m');
    }
}