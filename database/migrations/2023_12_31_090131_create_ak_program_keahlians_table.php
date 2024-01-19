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
        Schema::create('ak_program_keahlians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('nama');
            $table->string('level');
            $table->integer('order')->default(0);
            $table->string('singkatan');
            $table->timestamps();

            // Definisi foreign key untuk hubungan dengan dirinya sendiri (parent-child relationship)
            $table->foreign('parent_id')->references('id')->on('ak_program_keahlians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ak_program_keahlians');
    }
};
