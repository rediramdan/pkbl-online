<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajuanMitra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_mitra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_daftar')->nullable(true);
            $table->string('kode_pengajuan')->nullable(true);
            $table->string('user_id')->nullable(true);
            $table->string('nama')->nullable(true);
            $table->string('jenis_identitas')->nullable(true);
            $table->string('no_identitas')->nullable(true);
            $table->string('tempat_lahir')->nullable(true);
            $table->date('tanggal_lahir')->nullable(true);
            $table->string('jk')->nullable(true);
            $table->string('nama_ibu')->nullable(true);
            $table->bigInteger('nilai_pengajuan')->nullable(true);
            $table->string('sektor_usaha')->nullable(true);
            $table->string('badan_usaha')->nullable(true);
            $table->string('kota')->nullable(true);
            $table->string('status')->nullable(true);
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
        Schema::dropIfExists('pengajuan_mitra');
    }
}