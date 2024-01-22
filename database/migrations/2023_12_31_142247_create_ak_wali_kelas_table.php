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
        Schema::create('ak_wali_kelas', function (Blueprint $table) {
            $table->char('id_walikelas', 15)->primary();
            $table->char('tahunajaran', 10);
            $table->char('id_kls', 10);
            $table->char('id_guru', 20);
            $table->timestamps();

            // Tambahkan relasi ak_walikelas ke ak_kelas
            $table->foreign('id_kls')->references('id_kls')->on('ak_kelas')->onDelete('cascade');

            // Tambahkan relasi ak_walikelas ke biodata_gurus
            $table->foreign('id_guru')->references('id_guru')->on('ak_guru_tata_usahas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ak_wali_kelas', function (Blueprint $table) {
            $table->dropForeign(['id_kls']);
            $table->dropForeign(['id_guru']);
        });
        Schema::dropIfExists('ak_wali_kelas');
    }
};
