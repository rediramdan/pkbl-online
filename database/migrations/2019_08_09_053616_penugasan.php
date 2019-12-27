<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Penugasan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penugasan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_petugas')->nullable(true);
            $table->integer('id_pengajuan_mitra')->nullable(true);
            $table->date('tanggal_ditugaskan')->nullable(true);
            $table->date('tanggal_survey')->nullable(true);
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
        Schema::dropIfExists('penugasan');
    }
}