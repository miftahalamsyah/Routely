<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\StudentMateriController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\StudentPertemuanController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentSimulasiController;
use App\Http\Controllers\GitHubController;


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
});

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

//admin dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('admin');

Route::resource('/dashboard/materis', \App\Http\Controllers\MateriController::class)->middleware('admin');
Route::resource('/dashboard/siswa', \App\Http\Controllers\UserController::class)->middleware('admin');
Route::resource('/dashboard/tugas', \App\Http\Controllers\TugasController::class)->middleware('admin');
Route::resource('/dashboard/pertemuan', \App\Http\Controllers\PertemuanController::class)->middleware('admin');

Route::get('/fetch-data', [DataController::class, 'index']);

Route::get('/student', [StudentDashboardController::class, 'index'])->name('student.index')->middleware('auth');
Route::get('/student/profile', [ProfileController::class, 'index'])->name('student.profile')->middleware('auth');
Route::put('/student/profile', [ProfileController::class, 'update'])->name('student.profile.update')->middleware('auth');

Route::get('/student/pertemuan', [StudentPertemuanController::class, 'index'])->name('student.pertemuan')->middleware('auth');
Route::get('/student/pertemuan/{pertemuan:slug}', [StudentPertemuanController::class, 'show'])->name('student.pertemuan.show')->middleware('auth');
Route::get('/student/materi', [StudentMateriController::class, 'index'])->name('student.materi')->middleware('auth');
Route::get('/student/materi/{materi:slug}', [StudentMateriController::class, 'show'])->name('student.materi.show')->middleware('auth');
Route::get('/student/simulasi', [StudentSimulasiController::class, 'index'])->name('student.simulasi')->middleware('auth');
