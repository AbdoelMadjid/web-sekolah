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
        Schema::create('ak_paket_keahlians', function (Blueprint $table) {
            $table->char('kode_paket', 20)->primary();
            $table->char('kode_bidang', 20);
            $table->char('kode_program', 20);
            $table->string('nama_paket');
            $table->string('singkatan');
            $table->timestamps();

            $table->foreign('kode_bidang')->references('kode_bidang')->on('ak_bidang_keahlians')->onDelete('cascade');
            $table->foreign('kode_program')->references('kode_program')->on('ak_program_keahlians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ak_paket_keahlians', function (Blueprint $table) {
            $table->dropForeign(['kode_bidang']);
            $table->dropForeign(['kode_program']);
        });
        Schema::dropIfExists('ak_paket_keahlians');
    }
};
