<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataKeuangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_keuangan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_penugasan')->nullable(true);
            $table->bigInteger('kas_bank')->nullable(true);
            $table->bigInteger('persediaan_barang')->nullable(true);
            $table->bigInteger('piutang_usaha')->nullable(true);
            $table->bigInteger('peralatan_usaha')->nullable(true);
            $table->bigInteger('kendaraan')->nullable(true);
            $table->bigInteger('total_aktiva')->nullable(true);
            $table->bigInteger('hutang_dagang')->nullable(true);
            $table->bigInteger('hutang_lain')->nullable(true);
            $table->bigInteger('modal')->nullable(true);
            $table->bigInteger('total_pasiva')->nullable(true);
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
        Schema::dropIfExists('data_keuangan');
    }
}