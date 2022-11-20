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
            $table->string('nama2', 100);
            $table->string('nama3', 100);
            $table->string('nip1', 100)->required()->unique();
            $table->string('nip2', 100)->unique();
            $table->string('nip3', 100)->unique();
            $table->string('jabatan1', 100)->required();
            $table->string('jabatan2', 100);
            $table->string('jabatan3', 100);
            $table->string('pangkat1', 100)->required();
            $table->string('pangkat2', 100);
            $table->string('pangkat3', 100);
            $table->string('golongan1', 100)->required();
            $table->string('golongan2', 100);
            $table->string('golongan3', 100);
            $table->string('uang_harian1', 100);
            $table->string('uang_harian2', 100);
            $table->string('uang_harian3', 100);
            $table->string('uang_transport1', 100);
            $table->string('uang_transport2', 100);
            $table->string('uang_transport3', 100);
            $table->string('biaya_transport1', 100);
            $table->string('biaya_transport2', 100);
            $table->string('biaya_transport3', 100);
            $table->string('penerimaan1', 100);
            $table->string('penerimaan2', 100);
            $table->string('penerimaan3', 100);
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
