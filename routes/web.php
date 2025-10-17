<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;


Route::get('/home', [HomeController::class, 'index']);
Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/auth', [AuthController::class, 'index'])->name('login.form');

Route::post('/auth/login', [AuthController::class, 'login'])->name('login.submit');	

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/pelanggan', PelangganController::class);

Route::resource('/pelanggan/update', PelangganController::class);