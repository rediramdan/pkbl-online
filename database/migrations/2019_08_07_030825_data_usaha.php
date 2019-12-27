<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataUsaha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_usaha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_pengajuan')->nullable(true);
            $table->string('bidang_usaha')->nullable(true);
            $table->string('nama_usaha')->nullable(true);
            $table->string('nama_pimpinan')->nullable(true);
            $table->text('alamat_usaha')->nullable(true);
            $table->string('kota')->nullable(true);
            $table->string('kecamatan')->nullable(true);
            $table->string('kelurahan')->nullable(true);
            $table->string('kode_pos')->nullable(true);
            $table->string('no_tlp')->nullable(true);
            $table->string('no_hp')->nullable(true);
            $table->string('no_fax')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('status_kepemilikan_usaha')->nullable(true);
            $table->date('tanggal_akhir_sewa')->nullable(true);
            $table->date('tanggal_aktif_usaha')->nullable(true);
            $table->integer('jumlah_tenaga_kerja')->nullable(true);
            $table->bigInteger('modal')->nullable(true);
            $table->bigInteger('investasi')->nullable(true);
            $table->bigInteger('omset_perbulan_rp')->nullable(true);
            $table->integer('omset_perbulan_unit')->nullable(true);
            $table->string('adm_pembukuan')->nullable(true);
            $table->string('berupa')->nullable(true);
            $table->string('pinjaman_pihak_lain')->nullable(true);
            $table->string('bank_bumn')->nullable(true);
            $table->bigInteger('Besarnya')->nullable(true);
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
        Schema::dropIfExists('data_usaha');
    }
}