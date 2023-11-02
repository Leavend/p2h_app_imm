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
        Schema::create('p2hs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kendaraan_id');
            $table->date('tanggal');
            $table->time('jam')->nullable();
            $table->string('nama_pemeriksa')->nullable();
            $table->char('nik', 11)->nullable();
            $table->string('departemen')->nullable();
            $table->string('no_hp')->nullable();
            $table->enum('oli_mesin', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('oli_kopling', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('air_radiator', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('oli_stering', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('rem_depanBelakang', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('rem_tangan', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('lampu_jauhDekat', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('lampu_reting_rL', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('lampu_belakang', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('lampu_rem', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('lampu_mundur', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('lampu_rotari', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('roda_depanBelakang', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('roda_cadangan', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('body_fender_rL', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('body_pintu_rL', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('body_atap_kabin', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('body_bendera', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('body_lantai_kabin', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('body_karet_mounting', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('body_sepring', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('tools_dongkrak_aksesoris', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('tools_kunci_roda', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('tools_segitiga_pengaman', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('tools_ganjal_ban', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('others_sabuk_pengaman', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('others_spidometer', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('others_klakson', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('others_spion', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('others_wiper', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('others_alarm_mundur', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('others_radio_komun', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('others_knalpot', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('others_no_lambung', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('others_apar', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('others_kursi_duduk', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('surat_p3k', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->enum('surat_stnp_kir', ['baik', 'rusak', 'tidak ada'])->nullable();
            $table->longText('keterangan')->nullable();
            $table->enum('status', ['belum diperiksa', 'menunggu verifikasi', 'terverifikasi'])->default('belum diperiksa');

            $table->foreign('kendaraan_id')->references('id')->on('kendaraans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p2hs');
    }
};
