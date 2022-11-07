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
            $table->string('lama_perjalanan', 100)->required();
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
