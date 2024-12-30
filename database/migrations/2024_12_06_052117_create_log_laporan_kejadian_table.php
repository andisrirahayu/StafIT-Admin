<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogLaporanKejadianTable extends Migration
{
    public function up()
    {
        Schema::create('log_laporan_kejadian', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('lokasi');
            $table->text('deskripsi');
            $table->string('gambar')->nullable(); // Opsional
            $table->enum('status', ['Diatasi', 'Selesai', 'Masih Ditangani'])->default('Masih Ditangani');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('log_laporan_kejadian');
    }
}
