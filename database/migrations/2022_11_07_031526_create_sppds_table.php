<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sppds', function (Blueprint $table) {
            $table->id();
            $table->string('pemberi_perintah', 100)->required();
            $table->string('penerima_perintah', 100)->required();
            $table->string('golongan', 100)->required();
            $table->string('tingkat', 100)->required();
            $table->string('maksud_perintah', 100)->required();
            $table->string('transportasi', 100)->required();
            $table->string('tempat_berangkat', 100)->required();
            $table->string('tempat_tujuan', 100)->required();
            $table->integer('lama_perjalanan', false, true)->length(100)->required();
            $table->date('tgl_pergi')->required();
            $table->date('tgl_kembali')->required();
            $table->string('pengikut1', 100, false)->required();
            $table->string('pengikut2', 100);
            $table->string('pengikut3', 100);
            $table->integer('nip1', false, true)->length(100)->required();
            $table->integer('nip2', false, true)->length(100);
            $table->integer('nip3', false, true)->length(100);
            $table->string('instansi', 100)->required();
            $table->string('mata_anggaran', 100)->required();
            $table->string('keterangan', 1000)->nullable();
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
        Schema::dropIfExists('sppds');
    }
};
