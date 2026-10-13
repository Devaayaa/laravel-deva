<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QuestionController;

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

Route::get('/home',[HomeController::class , 'index']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);

Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::get('/matakuliah/{id}/edit', [MatakuliahController::class, 'edit']);