<?php

use App\Http\Controllers\ApersepsiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GitHubController;
use App\Http\Controllers\HasilApersepsiSiswaController;
use App\Http\Controllers\HasilKuisSiswaController;
use App\Http\Controllers\HasilTesSiswaController;
use App\Http\Controllers\HasilTugasSiswaController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\NilaiTugasController;
use App\Http\Controllers\StudentPengajuanMasalahController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilPublikController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SoalKuisController;
use App\Http\Controllers\SoalTesController;
use App\Http\Controllers\StudentChatController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentKelompokController;
use App\Http\Controllers\StudentKuisController;
use App\Http\Controllers\StudentMateriController;
use App\Http\Controllers\StudentPertemuanController;
use App\Http\Controllers\StudentSimulasiController;
use App\Http\Controllers\StudentTesController;
use App\Http\Controllers\StudentTugasController;
use App\Http\Controllers\TugasController;
use App\Models\HasilKuisSiswa;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

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

Route::get('/', function()
{
    return View::make('pages.home',
        ['title'=>'Home']);
})->name('pages.home');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/lupa-sandi', [LoginController::class, 'lupaSandi'])->name('lupa-sandi');
Route::match(['put', 'post'], '/lupa-sandi/store', [LoginController::class, 'lupaSandiStore'])->name('lupa-sandi.store');

Route::get('auth/github', [GitHubController::class, 'gitRedirect'])->name('auth.github');
Route::get('auth/github/callback', [GitHubController::class, 'gitCallback']);
//end login

Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar');
Route::post('/daftar', [DaftarController::class, 'store']);

Route::view('/bantuan', 'pages.bantuan', ['title' => 'Bantuan'])->name('pages.bantuan');
Route::view('/berpikir-komputasi', 'pages.berpikir-komputasi', ['title' => 'Berpikir Komputasi'])->name('pages.berpikir-komputasi');
Route::view('/problem-posing', 'pages.problem-posing', ['title' => 'Problem Posing'])->name('pages.problem-posing');
Route::view('/routing', 'pages.routing', ['title' => 'Routing'])->name('pages.routing');

//admin dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('admin');

Route::resource('/dashboard/materis', \App\Http\Controllers\MateriController::class)->middleware('admin');
Route::resource('/dashboard/siswa', \App\Http\Controllers\UserController::class)->middleware('admin');
Route::resource('/dashboard/tugas', \App\Http\Controllers\TugasController::class)->middleware('admin');
Route::resource('/dashboard/pertanyaan-pemulihan', \App\Http\Controllers\PertanyaanPermulihanController::class)->middleware('admin');

Route::resource('/dashboard/apersepsi', ApersepsiController::class)->middleware('admin');

Route::resource('/dashboard/pertemuan', \App\Http\Controllers\PertemuanController::class)->middleware('admin');
Route::resource('/dashboard/kelompok', \App\Http\Controllers\KelompokController::class)->middleware('admin');
// Route::resource('/dashboard/nilai', \App\Http\Controllers\NilaiController::class)->middleware('admin');
Route::get('/dashboard/nilai', [\App\Http\Controllers\NilaiController::class, 'index'])->name('nilai.index')->middleware('admin');
Route::get('/dashboard/nilai/pretest', [\App\Http\Controllers\NilaiController::class, 'pretest'])->name('nilai.pretest')->middleware('admin');
Route::get('/dashboard/nilai/posttest', [\App\Http\Controllers\NilaiController::class, 'posttest'])->name('nilai.posttest')->middleware('admin');
Route::get('/dashboard/nilai/pretest/export-pretest', [NilaiController::class, 'exportPretest'])->name('nilai.pretest.export')->middleware('admin');
Route::get('/dashboard/nilai/posttest/export-posttest', [NilaiController::class, 'exportPosttest'])->name('nilai.posttest.export')->middleware('admin');
Route::get('/dashboard/nilai/tugas', [NilaiTugasController::class, 'index'])->name('nilai.tugas.index')->middleware('admin');
Route::get('/dashboard/nilai/tugas/create/{tugas_id}/{user_id}/{hasil_tugas_siswas_id}', [NilaiTugasController::class, 'create'])->name('nilai.tugas.create')->middleware('admin');
Route::post('/dashboard/nilai/tugas/store', [NilaiTugasController::class, 'store'])->name('nilai.tugas.store')->middleware('admin');
Route::delete('/dashboard/nilai/tugas/destroy/{id}', [NilaiTugasController::class, 'destroy'])->name('nilai.tugas.destroy')->middleware('admin');
Route::get('/dashboard/nilai/tugas/{hasil_tugas_siswas_id}/edit', [NilaiTugasController::class, 'edit'])->name('nilai.tugas.edit')->middleware('admin');
Route::put('/dashboard/nilai/tugas/{id}', [NilaiTugasController::class, 'update'])->name('nilai.tugas.update')->middleware('admin');
Route::get('/dashboard/nilai/kuis', [HasilKuisSiswaController::class, 'index'])->name('nilai.kuis')->middleware('admin');

Route::resource('/dashboard/lencana', \App\Http\Controllers\LencanaController::class)->middleware('admin');
Route::resource('/dashboard/absensi', \App\Http\Controllers\AbsensiController::class)->middleware('admin');
Route::resource('/dashboard/kategori-tes', \App\Http\Controllers\KategoriTesController::class)->middleware('admin');
Route::get('/dashboard/refleksi',[\App\Http\Controllers\RefleksiController::class, 'index'])->name('refleksi')->middleware('admin');
Route::get('/dashboard/refleksi/export', [\App\Http\Controllers\RefleksiController::class, 'export'])->name('refleksi.export')->middleware('admin');
Route::delete('/dashboard/refleksi/{id}', [\App\Http\Controllers\RefleksiController::class, 'destroy'])->name('refleksi.destroy')->middleware('admin');

// Kuis
Route::get('/dashboard/kuis', [SoalKuisController::class, 'index'])->name('kuis.index')->middleware('admin');
Route::get('/dashboard/kuis/create', [SoalKuisController::class, 'create'])->name('kuis.create')->middleware('admin');
Route::post('/dashboard/kuis/store', [SoalKuisController::class, 'store'])->name('kuis.store')->middleware('admin');
Route::get('/dashboard/kuis/edit/{id}', [SoalKuisController::class, 'edit'])->name('kuis.edit')->middleware('admin');
Route::match(['get', 'post'], '/dashboard/kuis/import', [SoalKuisController::class, 'import'])->name('kuis.import')->middleware('admin');
Route::delete('/dashboard/kuis/{id}', [SoalKuisController::class, 'destroy'])->name('kuis.destroy')->middleware('admin');

Route::get('/dashboard/pretest', [\App\Http\Controllers\SoalTesController::class, 'pretestindex'])->name('pretest.index')->middleware('admin');
Route::get('/dashboard/pretest/create', [\App\Http\Controllers\SoalTesController::class, 'pretestcreate'])->name('pretest.create')->middleware('admin');
Route::match(['get', 'post'], '/dashboard/pretest/import', [SoalTesController::class, 'pretestimport'])->name('pretest.import')->middleware('admin');
Route::post('/dashboard/pretest', [\App\Http\Controllers\SoalTesController::class, 'preteststore'])->name('pretest.store')->middleware('admin');
Route::get('/dashboard/pretest/edit', [\App\Http\Controllers\SoalTesController::class, 'pretestedit'])->name('pretest.edit')->middleware('admin');
Route::delete('/dashboard/pretest/{id}', [\App\Http\Controllers\SoalTesController::class, 'pretestdestroy'])->name('pretest.destroy')->middleware('admin');

Route::get('/dashboard/posttest', [\App\Http\Controllers\SoalTesController::class, 'posttestindex'])->name('posttest.index')->middleware('admin');
Route::get('/dashboard/posttest/create', [\App\Http\Controllers\SoalTesController::class, 'posttestcreate'])->name('posttest.create')->middleware('admin');
Route::match(['get', 'post'], '/dashboard/posttest/import', [SoalTesController::class, 'posttestimport'])->name('posttest.import')->middleware('admin');
Route::post('/dashboard/posttest', [\App\Http\Controllers\SoalTesController::class, 'postteststore'])->name('posttest.store')->middleware('admin');
Route::get('/dashboard/posttest/edit', [\App\Http\Controllers\SoalTesController::class, 'posttestedit'])->name('posttest.edit')->middleware('admin');
Route::delete('/dashboard/posttest/{id}', [\App\Http\Controllers\SoalTesController::class, 'posttestdestroy'])->name('posttest.destroy')->middleware('admin');

Route::get('/fetch-data', [DataController::class, 'index']);

Route::get('/student', [StudentDashboardController::class, 'index'])->name('student.index')->middleware('auth');
Route::get('/student/search', [SearchController::class, 'search'])->name('student.search')->middleware('auth');

Route::get('/student/problem-posing', [StudentDashboardController::class, 'problemPosing'])->name('student.problem-posing')->middleware('auth');
Route::get('/student/berpikir-komputasi', [StudentDashboardController::class, 'berpikirKomputasi'])->name('student.berpikir-komputasi')->middleware('auth');

Route::get('/student/pertemuan/pertemuan-ke-{pertemuan_id}/apersepsi', [HasilApersepsiSiswaController::class, 'create'])->name('student.apersepsi')->middleware('auth');
Route::post('/student/hasil_apersepsi_siswa', [HasilApersepsiSiswaController::class, 'store'])->name('hasil_apersepsi_siswa.store')->middleware('auth');

Route::get('/student/pengajuan-masalah', [StudentPengajuanMasalahController::class, 'index'])->name('student.pengajuan-masalah')->middleware('auth');
Route::post('/student/pengajuan-masalah', [StudentPengajuanMasalahController::class, 'store'])->name('student.pengajuan-masalah.store')->middleware('auth');
Route::delete('/student/pengajuan-masalah/{id}', [StudentPengajuanMasalahController::class, 'destroy'])->name('student.pengajuan-masalah.destroy')->middleware('auth');

Route::get('/student/kelompok', [StudentKelompokController::class, 'index'])->name('student.kelompok')->middleware('auth');

Route::get('/student/profile', [ProfileController::class, 'index'])->name('student.profile.index')->middleware('auth');
Route::put('/student/profile', [ProfileController::class, 'update'])->name('student.profile.update')->middleware('auth');
Route::post('/student/profile/pertanyaan-pemulihan', [ProfileController::class, 'pertanyaanPemulihan'])->name('student.profile.pertanyaan-pemulihan');

Route::get('/student/leaderboard', [StudentDashboardController::class, 'leaderboard'])->name('student.leaderboard')->middleware('auth');

Route::get('/student/refleksi', [\App\Http\Controllers\StudentRefleksiController::class, 'index'])->name('student.refleksi')->middleware('auth');
Route::post('/student/refleksi', [\App\Http\Controllers\StudentRefleksiController::class, 'store'])->name('student.refleksi.store')->middleware('auth');

Route::get('/profil_publik/{user:slug}', [ProfilPublikController::class, 'show'])->name('profil_publik');

Route::get('/student/pertemuan', [StudentPertemuanController::class, 'index'])->name('student.pertemuan')->middleware('auth');
Route::get('/student/pertemuan/{pertemuan:slug}', [StudentPertemuanController::class, 'show'])->name('student.pertemuan.show')->middleware('auth');

Route::get('/student/materi', [StudentMateriController::class, 'index'])->name('student.materi')->middleware('auth');
Route::get('/student/materi/{materi:slug}', [StudentMateriController::class, 'show'])->name('student.materi.show')->middleware('auth');
Route::match(['get', 'post'], 'student/materi/{slug}', [StudentMateriController::class, 'show'])->name('student.materi.show');

Route::get('/student/pertemuan/pertemuan-ke-{pertemuan_id}/kuis', [StudentKuisController::class, 'create'])->name('student.kuis')->middleware('auth');
Route::get('/student/pertemuan/pertemuan-ke-{pertemuan_id}/kuis/review', [StudentKuisController::class, 'show'])->name('student.kuis.review')->middleware('auth');
Route::post('/hasil_kuis_siswa', [StudentKuisController::class, 'store'])->name('hasil_kuis_siswa.store')->middleware('auth');

Route::get('/student/simulasi', [StudentSimulasiController::class, 'index'])->name('student.simulasi')->middleware('auth');

Route::get('/student/tugas/{tugas:slug}', [StudentTugasController::class, 'show'])->name('student.tugas.show')->middleware('auth');
Route::post('/hasil_tugas_siswa', [HasilTugasSiswaController::class, 'store'])->name('hasil_tugas_siswa.store');
Route::delete('/student/tugas/{hasil_tugas_siswa_id}', [HasilTugasSiswaController::class, 'destroy'])->name('student.hasil_tugas_siswa.destroy')->middleware('auth');

Route::get('/student/tes', [StudentTesController::class, 'index'])->name('student.tes.index')->middleware('auth');
Route::get('/student/tes/{slug}', [StudentTesController::class, 'show'])->name('student.tes.show')->middleware('auth');
Route::get('/student/tes/{slug}/confirm', [StudentTesController::class, 'confirm'])
    ->name('student.tes.confirm')
    ->middleware('auth');
Route::post('/student/tes/{slug}/confirm', [StudentTesController::class, 'validatePasscode'])
    ->name('student.tes.validatePasscode')
    ->middleware('auth');
Route::post('/hasil_tes_siswa', [HasilTesSiswaController::class, 'store'])->name('hasil_tes_siswa.store');

Route::get('/student/chat', [StudentChatController::class, 'index'])->name('student.chat')->middleware('auth');
Route::resource('/student/chat', \App\Http\Controllers\StudentChatController::class)->middleware('auth');
