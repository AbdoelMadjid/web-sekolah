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
        Schema::create('ak_kelas', function (Blueprint $table) {
            $table->char('id_kls', 10)->primary();
            $table->char('kode_paket', 20);
            $table->char('thnajarawal', 4);
            $table->char('thnajarakhir', 4);
            $table->enum('tingkat', ['10', '11', '12']);
            $table->string('nama_singkat');
            $table->enum('pararel', ['1', '2', '3', '4', '5', '6', '7', '8', '9']);
            $table->string('nama_kelas');
            $table->char('kode_kelas', 20);
            $table->timestamps();

            $table->foreign('kode_paket')->references('kode_paket')->on('ak_paket_keahlians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ak_kelas', function (Blueprint $table) {
            $table->dropForeign(['id']);
        });
        Schema::dropIfExists('ak_kelas');
    }
};
