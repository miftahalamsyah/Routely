<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GitHubController;
use App\Http\Controllers\HasilTesSiswaController;
use App\Http\Controllers\KelompokController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilPublikController;
use App\Http\Controllers\SoalTesController;
use App\Http\Controllers\StudentChatController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentMateriController;
use App\Http\Controllers\StudentPertemuanController;
use App\Http\Controllers\StudentSimulasiController;
use App\Http\Controllers\StudentTesController;
use App\Http\Controllers\StudentTugasController;
use App\Http\Controllers\TugasController;
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
Route::resource('/dashboard/pertemuan', \App\Http\Controllers\PertemuanController::class)->middleware('admin');
Route::resource('/dashboard/kelompok', \App\Http\Controllers\KelompokController::class)->middleware('admin');
Route::resource('/dashboard/nilai', \App\Http\Controllers\NilaiController::class)->middleware('admin');
Route::resource('/dashboard/lencana', \App\Http\Controllers\LencanaController::class)->middleware('admin');
Route::resource('/dashboard/absensi', \App\Http\Controllers\AbsensiController::class)->middleware('admin');
Route::resource('/dashboard/kategori-tes', \App\Http\Controllers\KategoriTesController::class)->middleware('admin');

Route::get('/dashboard/pretest', [\App\Http\Controllers\SoalTesController::class, 'pretestindex'])->name('pretest.index')->middleware('admin');
Route::get('/dashboard/pretest/create', [\App\Http\Controllers\SoalTesController::class, 'pretestcreate'])->name('pretest.create')->middleware('admin');
Route::match(['get', 'post'], '/dashboard/pretest/import', [SoalTesController::class, 'pretestimport'])->name('pretest.import')->middleware('admin');
Route::post('/dashboard/pretest', [\App\Http\Controllers\SoalTesController::class, 'preteststore'])->name('pretest.store')->middleware('admin');
Route::get('/dashboard/pretest/edit', [\App\Http\Controllers\SoalTesController::class, 'pretestedit'])->name('pretest.edit')->middleware('admin');
Route::delete('/dashboard/pretest/{id}', [\App\Http\Controllers\SoalTesController::class, 'pretestdestroy'])->name('pretest.destroy')->middleware('admin');

Route::get('/dashboard/posttest', [\App\Http\Controllers\SoalTesController::class, 'posttestindex'])->name('posttest.index')->middleware('admin');
Route::get('/dashboard/posttest/create', [\App\Http\Controllers\SoalTesController::class, 'posttestcreate'])->name('posttest.create')->middleware('admin');
Route::post('/dashboard/posttest', [\App\Http\Controllers\SoalTesController::class, 'postteststore'])->name('posttest.store')->middleware('admin');
Route::get('/dashboard/posttest/edit', [\App\Http\Controllers\SoalTesController::class, 'posttestedit'])->name('posttest.edit')->middleware('admin');
Route::delete('/dashboard/posttest/{id}', [\App\Http\Controllers\SoalTesController::class, 'posttestdestroy'])->name('posttest.destroy')->middleware('admin');

Route::get('/fetch-data', [DataController::class, 'index']);

Route::get('/student', [StudentDashboardController::class, 'index'])->name('student.index')->middleware('auth');
Route::get('/student/profile', [ProfileController::class, 'index'])->name('student.profile.index')->middleware('auth');
Route::put('/student/profile', [ProfileController::class, 'update'])->name('student.profile.update')->middleware('auth');



Route::get('/profil_publik/{user:slug}', [ProfilPublikController::class, 'show'])->name('profil_publik');

Route::get('/student/pertemuan', [StudentPertemuanController::class, 'index'])->name('student.pertemuan')->middleware('auth');
Route::get('/student/pertemuan/{pertemuan:slug}', [StudentPertemuanController::class, 'show'])->name('student.pertemuan.show')->middleware('auth');

Route::get('/student/materi', [StudentMateriController::class, 'index'])->name('student.materi')->middleware('auth');
Route::get('/student/materi/{materi:slug}', [StudentMateriController::class, 'show'])->name('student.materi.show')->middleware('auth');
Route::match(['get', 'post'], 'student/materi/{slug}', [StudentMateriController::class, 'show'])->name('student.materi.show');

Route::get('/student/tugas/{tugas:slug}', [StudentTugasController::class, 'show'])->name('student.tugas.show')->middleware('auth');

Route::get('/student/simulasi', [StudentSimulasiController::class, 'index'])->name('student.simulasi')->middleware('auth');

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
