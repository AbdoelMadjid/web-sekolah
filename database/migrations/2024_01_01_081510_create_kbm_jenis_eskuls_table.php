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
        Schema::create('kbm_jenis_eskuls', function (Blueprint $table) {
            $table->char('id_eskul', 15)->primary();
            $table->string('nama_eskul', 100);
            $table->enum('jenis_eskul', ['Wajib', 'Pilihan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kbm_jenis_eskuls');
    }
};
