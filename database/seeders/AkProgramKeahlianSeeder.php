<?php

namespace Database\Seeders;

use App\Models\AkProgramKeahlian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkProgramKeahlianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $progahlis = [
            [
                'nama' => 'Teknologi Informasi',
                'level' => 'Bidang Keahlian',
                'order' => 1,
                'singkatan' => 'TI',
                'children' => [
                    [
                        'nama' => 'Pengembangan Perangkat Lunak dan Gim',
                        'level' => 'Program Keahlian',
                        'order' => 1,
                        'singkatan' => 'PPLG',
                        'children' => [
                            [
                                'nama' => 'Rekayasa Perangkat Lunak',
                                'level' => 'Konsentrasi Keahlian',
                                'order' => 1,
                                'singkatan' => 'RPL',
                            ],
                        ],
                    ],
                    [
                        'nama' => 'Teknik Jaringan Komputer dan Telekomunikasi',
                        'level' => 'Program Keahlian',
                        'order' => 1,
                        'singkatan' => 'TJKT',
                        'children' => [
                            [
                                'nama' => 'Teknik Komputer dan Jaringan',
                                'level' => 'Konsentrasi Keahlian',
                                'order' => 1,
                                'singkatan' => 'TKJ',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'nama' => 'Manajemen Bisnis',
                'level' => 'Bidang Keahlian',
                'order' => 1,
                'singkatan' => 'TI',
                'children' => [
                    [
                        'nama' => 'Pemasaran',
                        'level' => 'Program Keahlian',
                        'order' => 1,
                        'singkatan' => 'PM',
                        'children' => [
                            [
                                'nama' => 'Bisnis Digital',
                                'level' => 'Konsentrasi Keahlian',
                                'order' => 1,
                                'singkatan' => 'BD',
                            ],
                        ],
                    ],
                    [
                        'nama' => 'Manajemen Perkantoran dan Layanan Bisnis',
                        'level' => 'Program Keahlian',
                        'order' => 1,
                        'singkatan' => 'MPLB',
                        'children' => [
                            [
                                'nama' => 'Manajemen Perkantoran',
                                'level' => 'Konsentrasi Keahlian',
                                'order' => 1,
                                'singkatan' => 'MP',
                            ],
                        ],
                    ],
                    [
                        'nama' => 'Akuntansi dan Keuangan Lembaga',
                        'level' => 'Program Keahlian',
                        'order' => 1,
                        'singkatan' => 'AKL',
                        'children' => [
                            [
                                'nama' => 'Akuntansi',
                                'level' => 'Konsentrasi Keahlian',
                                'order' => 1,
                                'singkatan' => 'AK',
                            ],
                        ],
                    ],
                ],
            ],
        ];
        foreach ($progahlis as $progahliData) {
            $this->createProgahli($progahliData);
        }
    }

    private function createProgahli($data, $parent = null)
    {
        $progahli = new AkProgramKeahlian([
            'nama' => $data['nama'],
            'level' => $data['level'],
            'order' => $data['order'],
            'singkatan' => $data['singkatan'],
        ]);

        if ($parent) {
            $parent->children()->save($progahli);
        } else {
            $progahli->save();
        }

        if (isset($data['children'])) {
            foreach ($data['children'] as $childData) {
                $this->createProgahli($childData, $progahli);
            }
        }
    }
}
