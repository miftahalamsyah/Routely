<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\StudentMateriController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

Route::get('/welcome', [HomeController::class, 'index'])->name('home')->middleware('auth');
//end login

Route::get('/daftar', function () {
    return View::make('pages.daftar',
        ['title'=>'Daftar']);
});

Route::get('/materi', [StudentMateriController::class, 'index'])->name('materi.index');

Route::get('/materi/{materi:slug}', [StudentMateriController::class, 'show'])->name('materi.show');

Route::get('/simulasi', function () {
    return View::make('pages.simulasi',
        ['title'=>'Simulasi']);
});

Route::get('/bantuan', function () {
    return View::make('pages.bantuan',
        ['title'=>'Bantuan']);
});


//admin dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


Route::resource('/dashboard/materis', \App\Http\Controllers\MateriController::class);
Route::resource('/dashboard/siswa', \App\Http\Controllers\UserController::class);

Route::get('/fetch-data', [DataController::class, 'index']);
