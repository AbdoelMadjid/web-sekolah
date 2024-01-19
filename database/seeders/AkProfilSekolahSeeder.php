<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AkProfilSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'npsn' => '20213871',
                'nm_sekolah' => 'SMKN 1 KADIPATEN',
                'status' => 'Negeri',
                'alamat_blok' => 'A',
                'alamat_no' => '30',
                'alamat_rt' => '001',
                'alamat_rw' => '001',
                'alamat_desa' => 'Liangjulang',
                'alamat_kec' => 'Kadipaten',
                'alamat_kab' => 'Majalengka',
                'alamat_provinsi' => 'Jawa Barat',
                'alamat_kodepos' => '45452',
                'alamat_telepon' => '0233614343',
                'alamat_website' => 'http://www.smkn1kadipaten.sch.id',
                'alamat_email' => 'info@smkn1kadipaten.sch.id',
                'logo_sekolah' => 'logo_sakola.jpg',
            ],
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        DB::table('ak_profil_sekolahs')->insert($data);
    }
}
