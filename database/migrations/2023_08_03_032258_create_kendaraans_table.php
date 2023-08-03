<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kendaraan');
            $table->string('nomor_lambung')->unique();
            $table->string('nomor_polisi')->unique();
            $table->string('keterangan');
            // $table->enum('status', ['belum mengisi', 'menunggu verfikasi', 'terverifikasi'])->default('belum mengisi');
            // $table->string('nama_pemeriksa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
