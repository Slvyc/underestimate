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
        Schema::table('kesiapan_teknologis', function (Blueprint $table) {
            $table->string('link')->nullable()->after('nilai_tkt'); // Menambahkan kolom link
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kesiapan_teknologis', function (Blueprint $table) {
            $table->dropColumn('link'); // Menghapus kolom link
        });
    }
};
