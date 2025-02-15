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
        Schema::create('penghargaan_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_person');
            $table->string('person');
            $table->string('prestasi');
            $table->enum('tingkat', ['Internasional', 'Nasional', 'Wilayah', 'Lokal', 'Provinsi', 'Kabupaten/Kota']);
            $table->date('tahun');
            $table->string('link');
            $table->integer('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penghargaan_mahasiswas');
    }
};
