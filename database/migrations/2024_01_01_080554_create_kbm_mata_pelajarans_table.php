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
        Schema::create('kbm_mata_pelajarans', function (Blueprint $table) {
            $table->id('id_mapel', 15)->primary();
            $table->string('kode_mapel', 15)->nullable();
            $table->foreign('kode_kk', 20);
            $table->enum('kelompok', ['A', 'B', 'C1', 'C2', 'C3', 'M']);
            $table->integer('urut_mp');
            $table->string('kelmapel', 5);
            $table->string('nama_mapel', 100);
            $table->string('jenismapel', 15);
            $table->string('semester1', 5);
            $table->string('semester2', 5);
            $table->string('semester3', 5);
            $table->string('semester4', 5);
            $table->string('semester5', 5);
            $table->string('semester6', 5);
            $table->timestamps();

            // Tambahkan relasi kbm_mata_pelajaran ke ak_konsentrasi_keahlians
            $table->foreign('kode_kk')->references('id')->on('ak_program_keahlians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kbm_mata_pelajarans', function (Blueprint $table) {
            $table->dropForeign(['nama']);
        });
        Schema::dropIfExists('kbm_mata_pelajarans');
    }
};
