<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KesimpulanUS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesimpulan_u_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_penugasan')->nullable(true);
            $table->string('jenis_pinjaman')->nullable(true);
            $table->string('kegunaan')->nullable(true);
            $table->string('jasa_administrasi')->nullable(true);
            $table->string('jenis_perhitungan_data')->nullable(true);
            $table->text('alasan')->nullable(true);
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
        Schema::dropIfExists('kesimpulan_u_s');
    }
}