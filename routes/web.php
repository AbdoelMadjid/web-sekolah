<?php

use App\Http\Controllers\website\WebSiteSakolaController;
use App\Http\Controllers\ErrorController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::fallback([ErrorController::class, 'index']);

Route::get('/', [WebSiteSakolaController::class, 'index'])->name('web_sakola');
Route::get('/sejarah', [WebSiteSakolaController::class, 'web_sejarah'])->name('sejarah');
Route::get('/visi-misi', [WebSiteSakolaController::class, 'visimisi'])->name('visimisi');
Route::get('/konsentrasi-keahlian', [WebSiteSakolaController::class, 'prodi'])->name('prodi');
Route::get('/sarana-prasarana', [WebSiteSakolaController::class, 'sapras'])->name('sapras');

Route::get('/tenaga-pendidik', [WebSiteSakolaController::class, 'guru'])->name('guru');
Route::get('/tenaga-kependidikan', [WebSiteSakolaController::class, 'tatausaha'])->name('tatausaha');
Route::get('/wakil-kepala-sekolah', [WebSiteSakolaController::class, 'wakasek'])->name('wakasek');
Route::get('/ketua-program-studi', [WebSiteSakolaController::class, 'kaprodi'])->name('kaprodi');
Route::get('/wali-kelas', [WebSiteSakolaController::class, 'walikelas'])->name('walikelas');

Route::get('/osis', [WebSiteSakolaController::class, 'osis'])->name('osis');
Route::get('/eskul', [WebSiteSakolaController::class, 'eskul'])->name('eskul');

Route::get('/event', [WebSiteSakolaController::class, 'event'])->name('event');
Route::get('/galery', [WebSiteSakolaController::class, 'galeri'])->name('galeri');
Route::get('/go-blog', [WebSiteSakolaController::class, 'goblog'])->name('goblog');

Route::get('/about-us', [WebSiteSakolaController::class, 'about'])->name('about');

require __DIR__ . '/web-admin.php';
require __DIR__ . '/web-template.php';
