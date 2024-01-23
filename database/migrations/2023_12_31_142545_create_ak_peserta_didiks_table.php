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
        Schema::create('ak_peserta_didiks', function (Blueprint $table) {
            $table->char('nis', 25)->primary();
            $table->char('nisn', 10)->nullable();
            $table->char('nik', 16)->nullable();
            $table->char('kode_paket', 20);
            $table->string('nama_siswa');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen/Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu', 'Kepercayaan Kepada Tuhan Yang Maha Esa']);
            $table->enum('status_dalam_kel', ['Anak Kandung', 'Anak Angkat', 'Anak Sambung']);
            $table->enum('anak_ke', ['1', '2', '3', '4', '5', '6', '7', '8', '9']);
            $table->string('telepon_siswa');
            $table->string('email');
            $table->string('sekolah_asal');
            $table->enum('diterima_kelas', ['10', '11', '12']);
            $table->date('diterima_tanggal');
            $table->enum('status', ['Siswa Baru', 'Pindahan']);
            $table->string('foto')->nullable();
            $table->timestamps();

            // Tambahkan relasi biodata_siswas ke ak_konsentrasi_keahlians
            $table->foreign('kode_paket')->references('kode_paket')->on('ak_paket_keahlians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ak_peserta_didiks', function (Blueprint $table) {
            $table->dropForeign(['kode_paket']);
        });
        Schema::dropIfExists('ak_peserta_didiks');
    }
};
