<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index']);
Route::get('/crea-libro', [BookController::class, 'create']);
Route::get('/crea-autore', [BookController::class, 'create_author']);
