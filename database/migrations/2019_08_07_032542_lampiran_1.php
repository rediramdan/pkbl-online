<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lampiran1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiran_1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pengajuan')->nullable(true);
            $table->string('ktp_pemohon')->nullable(true);
            $table->string('kk_pemohon')->nullable(true);
            $table->string('ktp_penjamin')->nullable(true);
            $table->string('kk_penjamin')->nullable(true);
            $table->string('poto_pemohon')->nullable(true);
            $table->string('poto_penjamin')->nullable(true);
            $table->string('sku_desa')->nullable(true);
            $table->string('skd_tempat_tinggal')->nullable(true);
            $table->string('poto_tempat_usaha')->nullable(true);
            $table->string('poto_produk')->nullable(true);
            $table->string('poto_kegiatan_usaha')->nullable(true);
            $table->string('denah_lokasi')->nullable(true);
            $table->string('denah_tempat_tinggal')->nullable(true);
            $table->string('buku_tabungan')->nullable(true);
            $table->string('akte_pendiri_usaha')->nullable(true);
            $table->string('surat_ijin_usaha')->nullable(true);
            $table->string('no_pokok_wajib_pajak')->nullable(true);
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
        Schema::dropIfExists('lampiran_1');
    }
}