<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MatakuliahController;

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::get('/matakuliah/{id}/edit', [MatakuliahController::class, 'edit']);