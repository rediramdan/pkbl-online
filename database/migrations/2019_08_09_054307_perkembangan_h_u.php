<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerkembanganHU extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkembangan_h_u', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_penugasan')->nullable(true);
            $table->text('catatan_wawancara')->nullable(true);
            $table->bigInteger('biaya_sewa')->nullable(true);
            $table->bigInteger('biaya_makan')->nullable(true);
            $table->bigInteger('biaya_utilitas')->nullable(true);
            $table->bigInteger('biaya_pendidikan')->nullable(true);
            $table->bigInteger('biaya_lain')->nullable(true);
            $table->bigInteger('jumlah_biaya')->nullable(true);
            $table->string('pendapatan_lain')->nullable(true);
            $table->string('angsuran_perbulan')->nullable(true);
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
        Schema::dropIfExists('perkembangan_h_u');
    }
}   