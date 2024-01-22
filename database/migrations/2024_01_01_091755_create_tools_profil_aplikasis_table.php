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
        Schema::create('tools_profil_aplikasis', function (Blueprint $table) {
            $table->id('id_profil')->primary();
            $table->string('app_nama');
            $table->text('app_deskripsi');
            $table->year('app_tahun');
            $table->string('app_pengembang');
            $table->string('app_icon');
            $table->string('app_logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tools_profil_aplikasis');
    }
};
