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
        Schema::create('dosen_sis', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_dosen');
            $table->string('nama_dosen');
            $table->enum('posisi_dosen', ['Asisten Ahli', 'Lektor Kepala', 'Lektor', 'Profesor'])->nullable();
            $table->integer('nidn')->nullable();
            $table->string('riwayat_prodi')->nullable();
            $table->string('riwayat_universitas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen_sis');
    }
};
