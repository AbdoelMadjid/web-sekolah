<?php

use App\Http\Controllers\dashboard\DashboardAdminController;

//bagian akademik
use App\Http\Controllers\akademik\AkTahunAjarSemesterController;
use App\Http\Controllers\akademik\AkProfilSekolahController;
use App\Http\Controllers\akademik\AkProgramKeahlianController;
use App\Http\Controllers\akademik\AkGuruTataUsahaController;
use App\Http\Controllers\akademik\AkKepalaSekolahController;
use App\Http\Controllers\akademik\AkWakilKepsekController;
use App\Http\Controllers\akademik\AkKaprodiController;
use App\Http\Controllers\akademik\AkJabatanLainController;
use App\Http\Controllers\akademik\AkKelasController;
use App\Http\Controllers\akademik\AkWaliKelasController;
use App\Http\Controllers\akademik\AkPesertaDidikController;

//bagian proses kbm
use App\Http\Controllers\proses_kbm\KbmMataPelajaranController;
use App\Http\Controllers\proses_kbm\KbmCPTPController;
use App\Http\Controllers\proses_kbm\KbmSiswaPerKelasController;
use App\Http\Controllers\proses_kbm\KbmBagiJamNgajarController;
use App\Http\Controllers\proses_kbm\KbmPerKelasController;
use App\Http\Controllers\proses_kbm\KbmPerGuruController;
use App\Http\Controllers\proses_kbm\KbmPenilaianController;
use App\Http\Controllers\proses_kbm\KbmRemedialController;

//bagian guru mapel
use App\Http\Controllers\guru\GuruAdministrasiController;
use App\Http\Controllers\guru\GuruDataKBMController;
use App\Http\Controllers\guru\GuruCPTPController;
use App\Http\Controllers\guru\GuruAbsensiSiswaController;
use App\Http\Controllers\guru\GuruPenilaianController;
use App\Http\Controllers\guru\GuruRemedialSiswaController;
use App\Http\Controllers\guru\GuruArsipController;

//bagian wali kelas
use App\Http\Controllers\walikelas\WkDataKelasController;
use App\Http\Controllers\walikelas\WkIdentitasSiswaController;
use App\Http\Controllers\walikelas\WkAbsensiController;
use App\Http\Controllers\walikelas\WkEskulController;
use App\Http\Controllers\walikelas\WkPrestasiController;
use App\Http\Controllers\walikelas\WkPrakerinController;
use App\Http\Controllers\walikelas\WkCatatanController;
use App\Http\Controllers\walikelas\WkRaporController;

use App\Http\Controllers\bpbk\BimbinganKarirController;

//tools
use App\Http\Controllers\toolsapp\ToolsProfilAplikasiController;
use App\Http\Controllers\toolsapp\ToolsJenisJabatanController;
use App\Http\Controllers\toolsapp\ToolsJenisEskulController;
use App\Http\Controllers\toolsapp\ToolsManajemenUsersController;
use App\Http\Controllers\toolsapp\ToolsOpsiAplikasiController;
use App\Http\Controllers\toolsapp\ToolsEksporController;
use App\Http\Controllers\toolsapp\ToolsImporController;
use App\Http\Controllers\toolsapp\ToolsStatistikDataController;

//website
use App\Http\Controllers\webapp\WebPengumumanController;
use App\Http\Controllers\webapp\WebKepegawaianController;
use App\Http\Controllers\webapp\WebKesiswaanController;
use App\Http\Controllers\webapp\WebSaranaPrasaranaController;
use App\Http\Controllers\webapp\WebAgendaKegiatanController;
use App\Http\Controllers\webapp\WebBlogController;
use App\Http\Controllers\webapp\WebGaleriController;






use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->name('dashboard_admin');
Route::get('/about', [DashboardAdminController::class, 'about'])->name('about');

Route::get('/ak-tahunajar', [AkTahunAjarSemesterController::class, 'index'])->name('tahu_najar');
Route::get('/ak-profil-sekolah', [AkProfilSekolahController::class, 'index'])->name('profil_sekolah');
Route::get('/ak-program-keahlian', [AkProgramKeahlianController::class, 'index'])->name('program_keahlian');
Route::get('/ak-guru-tata-usaha', [AkGuruTataUsahaController::class, 'index'])->name('guru_tata_usaha');
Route::get('/ak-kepala-sekolah', [AkKepalaSekolahController::class, 'index'])->name('kepsek');
Route::get('/ak-wakasek', [AkWakilKepsekController::class, 'index'])->name('wakasek');
Route::get('/ak-kaprodi', [AkKaprodiController::class, 'index'])->name('kaprodi');
Route::get('/ak-jabatan-lain', [AkJabatanLainController::class, 'index'])->name('jabatan_lain');
Route::get('/ak-kelas', [AkKelasController::class, 'index'])->name('kelas');
Route::get('/ak-wali-kelas', [AkWaliKelasController::class, 'index'])->name('wali_kelas');
Route::get('/ak-peserta-didik', [AkPesertaDidikController::class, 'index'])->name('peserta_didik');

//proses kbm
Route::get('/kbm-mata-pelajaran', [KbmMataPelajaranController::class, 'index'])->name('matapelajaran');
Route::get('/kbm-cp-tp', [KbmCPTPController::class, 'index'])->name('cptp');
Route::get('/kbm-siswa-perkelas', [KbmSiswaPerKelasController::class, 'index'])->name('siswa_perkelas');
Route::get('/kbm-bagi-jam-kbm', [KbmBagiJamNgajarController::class, 'index'])->name('bagi_jam_kbm');
Route::get('/kbm-proses-perkelas', [KbmPerKelasController::class, 'index'])->name('kbm_perkelas');
Route::get('/kbm-proses-perguru', [KbmPerGuruController::class, 'index'])->name('kbm_perguru');
Route::get('/kbm-proses-penilaian', [KbmPenilaianController::class, 'index'])->name('kbm_penilaian');
Route::get('/kbm-proses-remedial', [KbmRemedialController::class, 'index'])->name('kbm_remedial');

//guru
Route::get('/guru-administrasi', [GuruAdministrasiController::class, 'index'])->name('administrasi_guru');
Route::get('/guru-data-kbm', [GuruDataKBMController::class, 'index'])->name('data_kbm_guru');
Route::get('/guru-cp-tp', [GuruCPTPController::class, 'index'])->name('cp_tp_guru');
Route::get('/guru-kbm-proses-penilaian', [GuruPenilaianController::class, 'index'])->name('nilai_guru');
Route::get('/guru-kbm-proses-absensi', [GuruAbsensiSiswaController::class, 'index'])->name('absensi_guru');
Route::get('/guru-kbm-proses-remedial', [GuruRemedialSiswaController::class, 'index'])->name('remedial_guru');
Route::get('/guru-kbm-proses-arsip', [GuruArsipController::class, 'index'])->name('arsip_guru');

//wali kelas
Route::get('/wk-data-kelas', [WkDataKelasController::class, 'index'])->name('wk_data_kelas');
Route::get('/wk-ident-siswa', [WkIdentitasSiswaController::class, 'index'])->name('wk_ident_siswa');
Route::get('/wk-absensi-siswa', [WkAbsensiController::class, 'index'])->name('wk_abensi_siswa');
Route::get('/wk-eskul-siswa', [WkEskulController::class, 'index'])->name('wk_eskul_siswa');
Route::get('/wk-prestasi-siswa', [WkPrestasiController::class, 'index'])->name('wk_prestasi_siswa');
Route::get('/wk-prakerin-siswa', [WkPrakerinController::class, 'index'])->name('wk_prakerin_siswa');
Route::get('/wk-catatan-siswa', [WkCatatanController::class, 'index'])->name('wk_catatan_siswa');
Route::get('/wk-raport-siswa', [WkRaporController::class, 'index'])->name('wk_raport_siswa');

Route::get('/bp-bk', [BimbinganKarirController::class, 'index'])->name('bpbk');

//tools
Route::get('/tools-profil-aplikasi', [ToolsProfilAplikasiController::class, 'index'])->name('t_profil_app');
Route::get('/tools-data-jabatan', [ToolsJenisJabatanController::class, 'index'])->name('t_jenis_jab');
Route::get('/tools-data-eskul', [ToolsJenisEskulController::class, 'index'])->name('t_jenis_eskul');
Route::get('/tools-manajemen-users', [ToolsManajemenUsersController::class, 'index'])->name('t_manajemen_user');
Route::get('/tools-opsi-aplikasi', [ToolsOpsiAplikasiController::class, 'index'])->name('t_opsi_app');
Route::get('/tools-ekspor', [ToolsEksporController::class, 'index'])->name('t_ekspor');
Route::get('/tools-impor', [ToolsImporController::class, 'index'])->name('t_impor');
Route::get('/tools-statistik-data', [ToolsStatistikDataController::class, 'index'])->name('t_statistik');

//website
Route::get('/web-pengumuman', [WebPengumumanController::class, 'index'])->name('pengumuman');
Route::get('/web-kepegawaian', [WebKepegawaianController::class, 'index'])->name('kepegawaian');
Route::get('/web-kesiswaan', [WebKesiswaanController::class, 'index'])->name('kesiswaan');
Route::get('/web-sarana-prasarana', [WebSaranaPrasaranaController::class, 'index'])->name('sapras');
Route::get('/web-agenda-kegiatan', [WebAgendaKegiatanController::class, 'index'])->name('agenda');
Route::get('/web-blog', [WebBlogController::class, 'index'])->name('blog');
Route::get('/web-galeri', [WebGaleriController::class, 'index'])->name('galeri');
