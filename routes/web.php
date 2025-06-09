<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('index');

Route::get('/crea-libro', [BookController::class, 'create'])->name('create');
Route::post('/salva-libro', [BookController::class, 'store'])->name('store');
//Route::get('/crea-autore', [BookController::class, 'create_author']);
