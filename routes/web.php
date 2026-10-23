<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PelangganController;

Route::resource(
    'admin/pelanggan',
    PelangganController::class
);
Route::resource('pelanggan', PelangganController::class);

Route::get('dashboard', [DashboardController::class, 'index']) ->name('dashboard');

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

Route::get('/home',[HomeController::class , 'index']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::get('/matakuliah/{id}/edit', [MatakuliahController::class, 'edit']);
