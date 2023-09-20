<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\StudentMateriController;

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

Route::get('/login', function () {
    return View::make('pages.login',
        ['title'=>'Login']);
});

Route::get('/daftar', function () {
    return View::make('pages.daftar',
        ['title'=>'Daftar']);
});

Route::get('/materi', [StudentMateriController::class, 'index'])->name('materi.index');

Route::get('/materi/{materi:slug}', [StudentMateriController::class, 'show'])->name('materi.show');

Route::get('/bantuan', function () {
    return View::make('pages.bantuan',
        ['title'=>'Bantuan']);
});


//admin dashboard

Route::get('/dashboard', [DashboardController::class, 'index'], function(){
    return view('dashboard.index',
    ['title'=>'Admin Dashboard']);
});

Route::resource('/dashboard/materis', \App\Http\Controllers\MateriController::class);