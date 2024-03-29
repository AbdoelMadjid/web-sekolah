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
        Schema::create('ak_tahun_ajar_semesters', function (Blueprint $table) {
            $table->id('id_ta');
            $table->string('tahunajaran');
            $table->enum('semester', ['Ganjil', 'Genap']);
            $table->enum('aktif', ['Y', 'N']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ak_tahun_ajar_semesters');
    }
};
