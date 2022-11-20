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
        Schema::create('spts', function (Blueprint $table) {
            $table->id();
            $table->string('dasar_perintah', 100)->required();
            $table->string('pegawai_diperintah1', 100)->required();
            $table->string('pegawai_diperintah2', 100);
            $table->string('pegawai_diperintah3', 100);

            $table->string('nip1', 100)->required();
            $table->string('nip2', 100);
            $table->string('nip3', 100);

            $table->string('golongan1', 100)->required();
            $table->string('golongan2', 100);
            $table->string('golongan3', 100);

            $table->string('jabatan1', 100)->required();
            $table->string('jabatan2', 100);
            $table->string('jabatan3', 100);

            $table->string('maksud_tugas', 100)->required();
            $table->string('hari_tanggal', 100)->required();
            $table->string('tempat', 100)->required();

            $table->string('tempat_ditetapkan',100)->required();
            $table->string('tanggal_ditetapkan',100);
            $table->string('yang_menetapkan',100);
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
        Schema::dropIfExists('spts');
    }
};
