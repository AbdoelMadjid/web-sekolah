<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AkTahunAjarSemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'tahunajaran' => '2020-2021',
                'semester' => 'Ganjil',
                'aktif' => 'N',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahunajaran' => '2020-2021',
                'semester' => 'Genap',
                'aktif' => 'N',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahunajaran' => '2021-2022', 'semester' => 'Ganjil', 'aktif' => 'N', 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahunajaran' => '2021-2022', 'semester' => 'Genap', 'aktif' => 'N', 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahunajaran' => '2022-2023', 'semester' => 'Ganjil', 'aktif' => 'N', 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahunajaran' => '2022-2023', 'semester' => 'Genap', 'aktif' => 'N', 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahunajaran' => '2023-2024', 'semester' => 'Ganjil', 'aktif' => 'N', 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahunajaran' => '2023-2024', 'semester' => 'Genap', 'aktif' => 'Y', 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahunajaran' => '2024-2025', 'semester' => 'Ganjil', 'aktif' => 'N', 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahunajaran' => '2024-2025', 'semester' => 'Genap', 'aktif' => 'N', 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahunajaran' => '2025-2026', 'semester' => 'Ganjil', 'aktif' => 'N', 'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tahunajaran' => '2025-2026', 'semester' => 'Genap', 'aktif' => 'N', 'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        DB::table('ak_tahun_ajar_semesters')->insert($data);
    }
}
