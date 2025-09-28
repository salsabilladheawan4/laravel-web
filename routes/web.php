<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MatakuliahController;

Route::get('/matakuliah/index', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::get('/matakuliah/store', [MatakuliahController::class, 'store']);
Route::get('/matakuliah/show/{id}', [MatakuliahController::class, 'show']);
Route::get('/matakuliah/edit/{id}', [MatakuliahController::class, 'edit']);
Route::get('/matakuliah/update/{id}', [MatakuliahController::class, 'update']);
Route::get('/matakuliah/destroy/{id}', [MatakuliahController::class, 'destroy']);