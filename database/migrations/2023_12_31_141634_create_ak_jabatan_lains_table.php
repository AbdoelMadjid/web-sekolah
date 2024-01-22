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
        Schema::create('ak_jabatan_lains', function (Blueprint $table) {
            $table->char('id_jablain', 15)->primary();
            $table->char('tahunmulai', 4);
            $table->char('tahunselesai', 4)->nullable();
            $table->char('id_jab', 20);
            $table->char('id_guru', 20);
            $table->timestamps();

            // Tambahkan relasi ak_wakaseks ke ak_jabatan_wakaseks
            $table->foreign('id_jab')->references('id_jab')->on('ak_jenis_jabatans')->onDelete('cascade');

            // Tambahkan relasi ak_wakaseks ke biodata_gurus
            $table->foreign('id_guru')->references('id_guru')->on('ak_guru_tata_usahas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ak_jabatan_lains', function (Blueprint $table) {
            $table->dropForeign(['id_jab']);
            $table->dropForeign(['id_guru']);
        });
        Schema::dropIfExists('ak_jabatan_lains');
    }
};
