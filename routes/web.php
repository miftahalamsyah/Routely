<?php

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

Route::get('/materi', function () {
    return View::make('pages.materi',
        ['title'=>'Materi']);
});

Route::get('/bantuan', function () {
    return View::make('pages.bantuan',
        ['title'=>'Bantuan']);
});