<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\KejadianController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::resource('home', HomeController::class);
Route::get('/kejadian/{id}', [KejadianController::class, 'index'])->name('kejadian.index');

Route::resource('user', UserController::class);
Route::resource('warga', WargaController::class);

