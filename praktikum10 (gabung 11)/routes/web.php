<?php

use App\Http\Controllers\kelurahanController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Hai, Saya Hanna Anggraini siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});



Route::get('/admin', [AdminController::class, 'index']);
Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::get('/unit_kerja', [UnitKerjaController::class, 'index']);
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::resource('periksa', PeriksaController::class);
