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
        Schema::create('biayas', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan', 100)->required();
            $table->string('lokasi', 100)->required();
            $table->date('tanggal')->required();
            $table->string('kode_rek', 100)->required();
            $table->string('nama1', 100)->required()->unique();
            $table->string('nama2', 100)->required();
            $table->string('nama3', 100)->required();
            $table->string('jabatan1', 100)->required();
            $table->string('jabatan2', 100)->required();
            $table->string('jabatan3', 100)->required();
            $table->string('uang1', 100)->required();
            $table->string('uang2', 100)->required();
            $table->string('uang3', 100)->required();
            $table->string('uang_transport1', 100)->required();
            $table->string('uang_transport2', 100)->required();
            $table->string('uang_transport3', 100)->required();
            $table->string('biaya_transport1', 100)->required();
            $table->string('biaya_transport2', 100)->required();
            $table->string('biaya_transport3', 100)->required();
            $table->string('penerimaan1', 100)->required();
            $table->string('penerimaan2', 100)->required();
            $table->string('penerimaan3', 100)->required();
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
        Schema::dropIfExists('biayas');
    }
};
