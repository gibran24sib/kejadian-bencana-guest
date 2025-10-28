<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KejadianController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('home', HomeController::class);
Route::get('/kejadian/{id}', [KejadianController::class, 'index'])->name('kejadian.index');

Route::resource('users', UserController::class);


