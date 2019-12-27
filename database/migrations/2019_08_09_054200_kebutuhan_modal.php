<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KebutuhanModal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebutuhan_modal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_penugasan')->nullable(true);
            $table->string('laba_rugi_usaha')->nullable(true);
            $table->string('beban_rumah_tangga')->nullable(true);
            $table->string('pendapatan_ll')->nullable(true);
            $table->string('angsuran_perbulan')->nullable(true);
            $table->string('pengakuan_mampu_membayar')->nullable(true);
            $table->string('nilai_pinjam')->nullable(true);
            $table->string('kemampuan_angsuran_perbulan')->nullable(true);
            $table->string('jangka_waktu')->nullable(true);
            $table->string('grace_periode')->nullable(true);
            $table->string('entitas_pembayaran')->nullable(true);
            $table->string('entitas_nilai_pokok')->nullable(true);
            $table->string('jumlah_pinjaman')->nullable(true);
            $table->string('pembulatan')->nullable(true);

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
        Schema::dropIfExists('kebutuhan_modal');
    }
}