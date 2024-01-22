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
        Schema::create('ak_kaprodis', function (Blueprint $table) {
            $table->char('id_kaprog', 15)->primary();
            $table->char('tahunmulai', 4);
            $table->char('tahunselesai', 4)->nullable();
            $table->char('id', 20);
            $table->char('id_guru', 20);
            $table->timestamps();

            // Tambahkan relasi ms_kaprodis ke ms_konsentrasi_keahlians
            $table->foreign('kode_kk')->references('id')->on('ak_program_keahlians')->onDelete('cascade');

            // Tambahkan relasi ms_kaprodis ke ms_guru_tata_usahas
            $table->foreign('id_guru')->references('id_guru')->on('ak_guru_tata_usahas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ak_kaprodis', function (Blueprint $table) {
            $table->dropForeign(['id']);
            $table->dropForeign(['id_guru']);
        });
        Schema::dropIfExists('ak_kaprodis');
    }
};
