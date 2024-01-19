<?php

namespace App\Helpers;

use App\Models\AppFitur;

class Fitures
{
    public static function getFiturAktif()
    {
        $fitur = AppFitur::where('aktif', 'Y')->get();
        $hasil = [];

        foreach ($fitur as $f) {
            // Mengambil view berdasarkan nama_fitur
            if (view()->exists("admin.inc.fitur.{$f->nama_fitur}")) {
                $hasil[] = "admin.inc.fitur.{$f->nama_fitur}";
            }
        }

        return $hasil;
    }
}
