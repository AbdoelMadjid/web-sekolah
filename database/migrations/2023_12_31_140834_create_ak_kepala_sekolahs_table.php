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
        Schema::create('ak_kepala_sekolahs', function (Blueprint $table) {
            $table->char('id_kepsek', 11)->primary();
            $table->char('id_guru', 20);
            $table->char('thnajaran', 12);
            $table->year('taawal');
            $table->year('taakhir');
            $table->enum('smstr', ['Ganjil', 'Genap']);
            $table->timestamps();

            // Tambahkan relasi ms_kepala_sekolahs ke ms_guru_tata_usahas
            $table->foreign('id_guru')->references('id_guru')->on('ak_guru_tata_usahas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ak_kepala_sekolahs', function (Blueprint $table) {
            $table->dropForeign(['id_guru']);
        });
        Schema::dropIfExists('ak_kepala_sekolahs');
    }
};
