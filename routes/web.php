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
   return View::make('pages.home');
});

Route::get('/login', function () {
    return View::make('pages.login');
});

Route::get('/daftar', function () {
    return View::make('pages.daftar');
});

Route::get('/bantuan', function () {
    return View::make('pages.bantuan');
});